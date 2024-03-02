<?php
    require_once('Carro.php');
    require_once('Eletrico.php');
    require_once('Combustao.php');

    $opala = new Carro();
    $corsa = new Eletrico();
    $civic = new Combustao();

    $opala->acelerar(16);
    $opala->desacelerar(5);
    $opala->brecar();
    $opala->ignicao();
?>