<?php

$x = 0;
while ($x < 10) {
    echo "Valor de X:" . $x . "<br/>";
    $x++;
};

for ($i = 0; $i < 10; $i++) {
    echo "Valor de I:" . $i . "<br/>";
}
echo "<br/>";

$nomes = array(
    array("nome" => "Ana", "idade" => 25),
    array("nome" => "Pedro", "idade" => 26),
    array("nome" => "Bia", "idade" => 32),
);

foreach ($nomes as $aluno) {
    echo "Nome : " . $aluno["nome"] . "-Idade: " . $aluno["idade"] . "<br/>";
};

$pessoa = array(
    "nome" => "ana",
    "idade" => 29,
    "cidade" => "itabuna",
    "estado" => "Bahia",
    "pais" => "Brasil"
);
echo "<br/>";
echo "Pessoa <br/>";
foreach ($pessoa as $chave => $dado) {
    echo $chave . " - " . $dado . "<br/>";
}
