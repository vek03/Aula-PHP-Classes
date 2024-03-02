<?php
    class Carro{
        private string $cor = 'Vermelho';
        private string $marca = 'Chevy';
        private string $modelo = 'Opala';
        private int $ano = 1985;
        private int $cilindros = 6;
        private int $porta = 2;
        private string $tipo = 'Passeio';
        private float $velocidade = 0;
        private int $marcha = 1;
        private bool $ligado = false;


        public function __construct(){
            $this->ignicao();
        }

        public function ficha_tecnica(){
            var_dump($this);
        }
        
        public function ignicao(){
            $estado = ($this->ligado == false) ? 'Ligando' : 'Desligando';
            echo '<br>' . $estado . ' Carro...';
            $this->ligado = !$this->ligado; 
        }


        public function embreagem($marcha){
            if($this->ligado){
                if($marcha < 5 || $marcha > 0){
                    if($marcha != $this->marcha){
                        $this->desacelerar(2);
                        $this->marcha = $marcha; 
                        $this->acelerar(4);
                        echo '<br>Trocando Marcha...';
                        echo '<br>Marcha Atual: ' . $this->marcha;
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


        public function acelerar($vel){
            if($this->ligado){
                if(($vel + $this->velocidade) < ($this->marcha * 15)){
                    $this->velocidade += $vel;
                    echo '<br>Acelerando...';
                    echo '<br>Velocidade atual: ' . $this->velocidade;
                }else{
                    echo '<br>A Marcha ' . $this->marcha . ' só suporta uma velocidade maxima de ' . ($this->marcha * 15);
                }
                
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

        public function brecar(){
            if($this->velocidade != 0){
                echo '<br>Brecando...';
                $this->velocidade = 0;
                echo '<br>Velocidade atual: ' . $this->velocidade;
            }else{
                echo '<br>O carro já está parado';
            }
        }

        public function getCor(){
            return $this->cor;
        }

        public function setCor($cor){
            $this->cor = $cor;
        }

        public function getPorta(){
            return $this->porta;
        }

        public function setPorta($porta){
            $this->porta = $porta;
        }

        public function getTipo(){
            return $this->tipo;
        }

        public function setTipo($tipo){
            $this->tipo = $tipo;
        }

        public function getVelocidade(){
            return $this->velocidade;
        }

        public function setVelocidade($vel){
            $this->velocidade = $vel;
        }

        public function getModelo(){
            return $this->velocidade;
        }

        public function setModelo($vel){
            $this->velocidade = $vel;
        }

        public function getMarca(){
            return $this->velocidade;
        }

        public function setMarca($vel){
            $this->velocidade = $vel;
        }

        public function getAno(){
            return $this->ano;
        }

        public function setAno($ano){
            $this->ano = $ano;
        }
    }
?>