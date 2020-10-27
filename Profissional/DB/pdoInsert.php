<?php
$dsn = "mysql:dbname=blog;host=localhost";
$dbuser ="root";
$dbpass = "";

try{
    $pdo = new PDO($dsn, $dbuser, $dbpass);
    $name = "testadorNovo";
       $email = "teste2@gmail.com";
       $password = md5("9874");
       //md5: criptografia de senha 
       
       $sql2 ="INSERT INTO users SET name = '$name', email = '$email', password = '$password'";
       $sql2 = $pdo->query($sql2);
       echo " nova Conexão estabelecida com sucesso....".$pdo->lastInsertId()."<br/>";
       // lastInsertId : mostra o ultimo Id inserido
}catch (PDOException $e) {
    // se tiver um erro vem pra cá
    //$e variavel pra onde vai o erro
    echo "Falhou: " . $e->getMessage();
};