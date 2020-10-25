<?php
$numero = -6.5;

echo abs($numero)."<br/>";

$n = 5.8;
$n2 = 5.43659;

echo "PI:". pi()."<br/>";
// pi

echo floor($n2)."<br/>";
//arredonda para baixo

echo ceil($n)."<br/>";
// arredonda pra cima

echo round($n)."<br/>";
// arredonda pra baixa a partir de 5 e arredonda pra cima a partir de 6
echo round($n2)."<br/>";

echo round($n2, 3)."<br/>";

echo rand(1, 40)."<br/>";
// numeros aleatórios

$lista =[1, 5, 6, 89, 9, 45, 156];
echo "Numero maior:".max($lista)."<br/>";
echo "Numero menor:".min($lista)."<br/>";


