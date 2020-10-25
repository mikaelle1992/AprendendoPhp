<?php
$list = [
    'nome' => 'mikaelle',
    'idade' => 28,
    'atributo' => [
        'força' => 60,
        'agilidade' => 80,
        'destreza' => 50
    ],
    'vida' =>1000
];

echo "nome:" .$list['nome']."<br/>";
echo "força:" .$list['atributo']['força']."<br/>";
echo "vida:" .$list['vida']."<br/>";