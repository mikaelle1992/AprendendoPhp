<?php
session_start();

//$_SESSION["teste"] = "mikaelle";
// a chave 'teste' tem o valor 'mikaelle'
// $_SESSION["teste2"] = array( " pode ser usado um array");

echo "meu nome é ".$_SESSION["teste"];