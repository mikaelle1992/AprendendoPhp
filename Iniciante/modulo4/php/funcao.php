<?php

function somarNumero($a, $b){
    return $a + $b;
};

somarNumero(10, 5);

$dataAtual = date('d/m/y \à\s H:i:s ');

echo $dataAtual."<br/>";

$t = time();

echo $t."<br/>";

$dataProxima = date('d/m/Y', strtotime("+10 days"));
// strtotime serve para comparar a data , exemplo :10 dias após a data atual 
echo $dataProxima;