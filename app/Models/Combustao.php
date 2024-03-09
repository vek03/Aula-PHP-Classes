<?php 
    namespace App\Models;

    use App\Models\Carro;

    class Combustao extends Carro{
        private float $total_litros_tanque = 120.0;
        private float $litros_tanque = 0;
        private float $gasto_km = 0;

        public function __construct($gasto){
            $this->gasto_km = $gasto;
            $this->ignicao();
        }

        public function ignicao(){
            if($this->litros_tanque > 0){
                $estado = ($this->ligado == false) ? 'Ligando' : 'Desligando';
                echo '<br>' . $estado . ' Carro...';
                $this->ligado = !$this->ligado; 
                $this->velocidade = 0;
                $this->litros_tanque = $this->litros_tanque - ($this->litros_tanque / 100);
                echo '<br>Nivel Gasolina: ' . ((($this->litros_tanque / 100) * ($this->total_litros_tanque / 100)) * 10) . '%';
            }else{
                echo '<br>Sem gasolina...';
            }
        }

        public function embreagem($marcha){
            if($this->ligado){
                if($this->marcha < $this->total_marchas){
                    if($marcha != $this->marcha){
                        $this->desacelerar(2);
                        echo '<br>Trocando Marcha...';
                        $this->marcha = $marcha; 
                        echo '<br>Marcha Atual: ' . $this->marcha;
                        $this->acelerar(4);
                    }else{
                        echo '<br>Marcha já engatada...';
                    }
                }else{
                    echo '<br>Marcha inexistente...';
                }
            }else{
                echo '<br>Carro está desligado...';
            }
        }

        public function verificarGasolina($gasto){
            if(($this->litros_tanque - $gasto) < $this->total_litros_tanque){
                $this->litros_tanque = 0;
                $this->ignicao();
            }else{
                $this->litros_tanque = $this->litros_tanque - $gasto;
            }

            echo '<br>Nivel Gasolina: ' . ((($this->litros_tanque / 100) * ($this->total_litros_tanque / 100)) * 10) . '%';
        }


        public function acelerar($vel){
            if($this->ligado){
                if(($vel + $this->velocidade) < ($this->marcha * 15)){
                    $this->verificarGasolina($this->velocidade);
                    $this->velocidade += $vel;
                    echo '<br>Acelerando...';
                }else{
                    if($this->velocidade == ($this->marcha * 15)){
                        echo '<br>Carro está morrendo...';
                        $this->ignicao();
                    }else{
                        $this->velocidade = ($this->marcha * 15);
                        echo '<br>A Marcha ' . $this->marcha . '° só suporta uma velocidade maxima de ' . ($this->marcha * 15);
                    }
                }
                echo '<br>Velocidade atual: ' . $this->velocidade;
                
            }else{
                echo '<br>Carro está desligado...';
            }
        }

        public function desacelerar($vel){
            if(($this->velocidade - $vel) > 0){
                $this->velocidade -= $vel;
                echo '<br>Desacelerando...';
                echo '<br>Velocidade atual: ' . $this->velocidade;
            }else{
                echo '<br>Não há como desacelerar essa kilometragem';
            }
            
        }
    
        public function abastecer($litros){
            if(!$this->ligado){
                if(($this->litros_tanque + $litros) <= $this->total_litros_tanque ){
                    echo '<br>Abastecendo: ' . $litros . ' Litros';
                    $this->litros_tanque += $litros;
                }else{
                    echo '<br>Tanque Cheio!';
                    $this->litros_tanque += $this->total_litros_tanque;
                }
            }else{
                echo '<br>Não se pode abastecer com o carro ligado!';
            }
            
            echo '<br>Nível de Gasolina: ' .  ((($this->litros_tanque / 100) * ($this->total_litros_tanque / 100)) * 10) . '%';
        }

        public function tanque(){
            echo 'Nível de Gasolina: ' .  ((($this->litros_tanque / 100) * ($this->total_litros_tanque / 100)) * 10) . '%';
            return $this->litros_tanque;
        }
    } 
?>