<?php

$dsn = "mysql:dbname=blog;host=localhost";
$dbuser = "root";
$dbpass = "";

try {
    $pdo = new PDO($dsn, $dbuser, $dbpass);

    $nome = "MIka";
    $id = 10;

    $sql = "UPDATE users SET name = :novonome WHERE id = :id ";
    $sql2 = $pdo->prepare($sql);
    //mando o pdo no  prepare  e a variavel (sql2) se transforme em uma classe

    $sql2->bindValue(':novonome', $nome);
    $sql2->bindValue(':id', $id);
    //bindValue: substitui o nome do parametro na consulta sql pola variavel

    $sql2->execute();
    // mesmo coisa do query


    echo "Usuario atualizado com sucesso !";
} catch (PDOException $e) {
    echo "Falhou : " . $e->getMessage();
}
