<?php
    namespace App\Models;

    class Carro{
        protected string $marca;
        protected string $modelo;
        protected int $ano = 1985;
        protected int $cilindros = 6;
        protected float $velocidade = 0;
        protected int $total_marchas = 5;
        protected int $marcha = 1;
        protected bool $ligado = false;
        

        public function ficha_tecnica(){
            var_dump($this);
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