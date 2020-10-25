<?php
$nome = "mikaelle  rubia     pinheiro  sousa";
$nomeLimpo = trim($nome);

echo "nome sujo:".strlen($nome)."<br/>";
echo "nome limpo:".strlen($nomeLimpo)."<br/>"; 

$x = "Ana Beatiz";
$teste = explode(" ", $x);
//explode :divide um string em um array;

print_r($teste)."<br/>";
echo "<br/>".$teste[0]."<br/>";

$y = array ("Pedro", "Santos");

$nomeCompleto = implode(" ", $y);
$teste2 = implode(",", $y);

echo $nomeCompleto."<br/>";
echo $teste2."<br/>";

$teste3 = substr($x, 0, 3);
$teste4 = substr($x, 4, 3);
// substr :pega uma parte da string de acordo com os paramêtros
echo $teste3."<br/>";
echo $teste4."<br/>";

echo ucfirst($nome)."<br/>";
// ucfirst: coloca a primeira letra da 1° palavra fica maiuscula
echo ucwords($nome);
//ucwords: coloca a primeira letra de todas as palavras maiusculas