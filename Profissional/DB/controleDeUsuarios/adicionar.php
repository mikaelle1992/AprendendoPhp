<?php
require 'config.php';

if(isset($_POST['name']) && empty($_POST['name']) == false){
    $nome = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha']));

    $sql= "INSERT INTO users SET name = '$nome' , email = '$email', password = '$senha'";
    $pdo->query($sql);

   header("Location: controle.php");
    
    
}
?>

<form method="POST">
    Nome:<br/>
<input type="text" name="name" /><br/><br/>
    Email:<br/>
    <input type="text" name="email"/><br/><br/>
    Senha:<br/>
    <input type="password" name="senha"/><br/><br/>
    <input type="submit" value="Cadastrar">

</form>