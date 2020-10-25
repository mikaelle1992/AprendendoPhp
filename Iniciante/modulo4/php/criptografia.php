<?php

$nome = "mikaelle rubia"; 
$nome2 = md5($nome);
// criptografia irreversível
$sobreNome= "Pinherio Sousa";
$sob2 = base64_encode($sobreNome);
//criptografia reversível; site base64encode.org 


echo "Nome Original : ".$nome."<br/>";
echo "Nome Cripto..: ".$nome2."<br/>";

?>