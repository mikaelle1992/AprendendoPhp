<?php
require 'config.php';
if(isset($_POST['nome']) && empty($_POST['nome']) ==false){
    //isset :se a variavel existir  ... empty : se a variavel está vazia 
    // se existir o campo $_POST['nome'] e não estaver vazia . entra no if 
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $senha =md5(addslashes($_POST['senha']));
    //addslashes : proteção contra invasões ... md5:criptografia

    $sql = "INSERT INTO users SET name = '$nome',email = '$email', password = '$senha'";
    $pdo->query($sql);

    header("Location: controleUsuarios.php");
    // header("Location: ...php") faz o redirecionamento 
}
?>

<form method="POST">
    <h1>Novo Usuário</h1>
    Nome:<br/>
    <input type = "text" name="nome"/><br/>
    E-mail:<br/>
    <input type = "text" name="email"/><br/>
     Senha:<br/>
    <input type = "password" name="senha"/><br/>

    <input type = "submit" value= "Cadastrar"/><br/>
</form>