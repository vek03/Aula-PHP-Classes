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
            echo 'Nenhum verbo conhecido';
            break;
    }

    $opala = new Combustao(20);
    $opala->abastecer(1);
    $opala->ignicao();
    //$civic = new Eletrico();

    $opala->acelerar(16);
    $opala->embreagem(2);
    $opala->acelerar(10);
    $opala->desacelerar(5);
    $opala->brecar();
    $opala->ignicao();
    $opala->abastecer(10);
?>