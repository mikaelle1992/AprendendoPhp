<?php
$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "";
 
 try{
     $pdo = new PDO($dsn, $dbuser, $dbpass);
     $sql = "UPDATE users SET email='anaSantos@gmail.com' WHERE email='ana@hotmail.com '";
     $sql = $pdo->query($sql);
     //executar (query);
     
     
     echo "Usuario atualizado";

 }catch(PDOException $e){
     echo "Falhou : ".$e->getMessage();
 };
