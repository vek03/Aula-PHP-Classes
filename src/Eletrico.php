<?php
    require_once('Carro.php');

    
    class Eletrico extends Carro{
        private float $total_kwh_bateria = 50.0;
        private float $restante_kwh_bateria = 0;
    
        public function carregar($kwh){
            echo '<br>Abastecendo...';
            $this->restante_kwh_bateria += $kwh;
            echo '<br>Nível de Gasolina Atual : ' . ((($this->restante_kwh_bateria / 100) * ($this->total_kwh_bateria / 100)) * 10) . '%';
        }
    }
?>