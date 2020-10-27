<?php

$dsn = "mysql:dbname=blog;host=localhost";
// dsn =  variavel , com o nome do tipo do banco de dados que esta usando (mysql) 
// ':dbname' para colocar o nome do db que sera conectado
// ';host' onde está o servidor ( aqui é na propria maquina), localhost 
$dbuser = "root";
// usuario 

$dbpass = "";
//senha

try {
       $pdo = new PDO($dsn, $dbuser, $dbpass);
       // inicio o PDO
       //echo "Conexão estabelecida com sucesso....";
       $sql = "SELECT *FROM users";
       $sql = $pdo->query($sql);
//query é pra executar o comando 

       if ($sql->rowCount() > 0) {
              //rowCount : contar linha
             
              foreach ($sql->fetchAll() as $usuario) { 
                    // fetchAll : transforma o resultado do $sql em um array 
                    echo " ID: ".$usuario["id"]."- Nome: ".$usuario["name"] . "-  ".$usuario["email"]."<br/>";
              }
       } else {
              echo "não há usuarios";
       }
} catch (PDOException $e) {
       // se tiver um erro vem pra cá
       //$e variavel pra onde vai o erro
       echo "Falhou: " . $e->getMessage();
}
