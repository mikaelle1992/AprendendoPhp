<?php
$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "";

try{
    $pdo = new PDO($dsn, $dbuser,$dbpass);

    $id = 12;

    $sql = "DELETE FROM users WHERE id = ".$id;
    $sql = $pdo->query($sql);

    echo "USUARIO DELETADO COM SUCESSO";
}catch(PDOException $e){
    echo "falhou : ".$e->getMessage();
}