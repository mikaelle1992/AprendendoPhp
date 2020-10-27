<?php
$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "";

try{
    $pdo = new PDO($dsn, $dbuser,$dbpass);

   $nome = 'pedro';
   $id = 1;

    $sql = "UPDATE usuarios SET name = :novonome WHERE id = :id";
    $sql = $pdo->prepare($sql);
    $sql->bindValue(':novonome',$nome);
    $sql->bindValue(':id',$id);
    $sql->execute();

    echo "USUARIO ATUALIZADO COM SUCESSO";
}catch(PDOException $e){
    echo "falhou : ".$e->getMessage();
}