<?php
$nome = ' mika ';
  
$nomeCompleto= $nome;
$nomeCompleto .= isset($sobrenome) ? $sobrenome : ' ';
//$nomeCompleto .= $sobrenome ?? ''; 'se a variavel existir use ela mesmo se não usa a condição

$nomes = $nome1 ?? 'visitante';
echo $nomes."<br/>";
echo $nomeCompleto;