<?php 
    namespace App\Models;

    use App\Models\Carro;

    class Combustao extends Carro{
        private float $total_litros_tanque = 120.0;
        private float $litros_tanque = 0;
    
        public function abastecer($litros){
            $this->litros_tanque += $litros;
            echo 'Nível de Gasolina: ' .  ((($this->litros_tanque / 100) * ($this->total_litros_tanque / 100)) * 10) . '%';
        }
    
    } 
?>