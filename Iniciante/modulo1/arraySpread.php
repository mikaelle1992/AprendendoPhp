<?php
$bolo1 = [
'açucar',
'farinha de trigo',
'ovo',
'leite'
];

$bolo2 = [
    'vasilha',
    'agua morna',
    ...$bolo1,
    'corante'
];

$lista1 = ['andre','Vitor'];
$lista2 = ['Pricila'," Gustavo"];
$lista3 = [...$lista1,...$lista2];



print_r($bolo2);
print_r($lista3);