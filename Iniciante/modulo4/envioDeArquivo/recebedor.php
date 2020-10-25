<?php
$arquivo = $_FILES['arquivo'];

if (isset($arquivo['tmp_name']) && !empty($arquivo['tmp_name'])) {
    
    $nome =rand(0,99).$arquivo['name'];
    move_uploaded_file($arquivo['tmp_name'],'arquivos/'.$nome);
    echo " arquivo enviado";
}
