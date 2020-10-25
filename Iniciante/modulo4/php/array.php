<?php
$array = array(
    "nome" => "mika",
    "idade" => 25,
    "cidade" => "ubaitaba",
    "pais" => "Brasil"
);

$array2 = array_keys($array);
// retorna um array só com as chaves ex: nome, idade, cidade;

$array3 = array_values($array);
// retorna um array com os valores ex: mika, 25, ubaitaba

print_r($array2);
echo "<br/>";
print_r($array3);
echo "<br/>";

for ($i = 0; $i < 4; $i++) {
    echo $array2[$i] . "<br/>";
}
echo "VALORES: <br/>";
for ($i = 0; $i < 4; $i++) {
    echo $array3[$i] . "<br/>";
}

array_pop($array);
// remove o ultimo elemento do array
print_r($array);

echo "<br/>";
array_shift($array);
// remove o primeiro elemento do array
print_r($array);

asort($array);
//ordenar os valores 
echo "<br/>";
$nomes = array(
    "ana",
    "bia",
    "pedro",
    "victor",
    "Andre"
);

echo "total de alunos: " . count($nomes);
// contar quantos elementos tem o array 
echo "<br/>";
if (in_array("bia", $nomes)) {
    //in_array faz um varredura do valor no array 
    echo "Aluno matriculada no Curso! ";
} else {
    echo " Aluno não esta matriculado no Curso! ";
};
