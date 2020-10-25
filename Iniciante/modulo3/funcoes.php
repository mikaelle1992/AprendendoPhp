<?php
function sub()
{
    for ($i = 0; $i < 10; $i++) {
        echo $i . "<br/>";
    }
    echo "<hr/>";
};

sub();
function soma($a, $b)
{
    return $a + $b;
};

echo " resultado da soma:" . soma(25, 5) . "<br/>";

function soma2(int $n, int $n2 = 0, int $n3 = 0)
{
    // coloquei um valor padrao nos paramatros n2 e n3
    // colocar o tipo do parametro ,sendo int ou String ou float
    $total = $n + $n2 + $n3;
    return $total;
}

$x = soma2(2);
$y = soma2(1, 6, 5);
$w = ($x + $y);

echo " resultado da soma:" . $w . "<br/>";

function somar3($n1, $n2, &$total)
{
    // o uso do '&' para a variavel ser recebida como  referencia e não como valor sendo assim essa parametro tem que ser uma variavel .
    // a variavel é puxada pra dentro da função e é incorporada na função,tudo que fizer de alteraçao nessa sera modificada a variavel externamente.
    $total = $n1 + $n2;
};

$m = 3;
$n = 9;
$total = 0;

somar3($m, $n, $total);
echo "total:" . $total . "<br/>";

//funçao anônima
$valor = function (int $n) {
    return $n * 2;
};
$valor2 = $valor;
echo $valor2(2) . ";" . $valor(5) . "<br/>";


// arrow function
$dizimo = fn ($n1) => $n1 * 0.5;
echo $dizimo(50) . "<br/>";
fn ($n2) => $n2 * 5;
echo (2). "<br/>";

//function recursivas
function dividir($valor)
{
    $total = $valor / 2;
    echo $total."<br/>";
    if ($total > 0) {
        dividir($total);
    }
};

dividir(1);
