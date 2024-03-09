<?php
    namespace App; 

    require 'vendor/autoload.php';

    use App\Models\Carro;
    use App\Models\Eletrico;
    use App\Models\Combustao;

    switch($_SERVER["REQUEST_METHOD"]){
        case "GET":
            echo 'GET';
            break;

        case "POST":
            echo 'POST';
            break;
        
        case "PUT":
            echo 'PUT';
            break;

        case "DELETE":
            echo 'DELETE';
            break;

        default:
            echo 'Nenhum';
            break;
    }

    

    $opala = new Carro();
    $corsa = new Eletrico();
    $civic = new Combustao();

    $opala->acelerar(16);
    $opala->desacelerar(5);
    $opala->brecar();
    $opala->ignicao();
?>