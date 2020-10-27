<?php
require 'config.php';

$id = 0;
if (isset($_GET['id']) && empty($_GET['id']) == false) {
    $id = addslashes($_GET['id']);
}
if (isset($_POST['nome']) && empty($_POST['nome']) == false) {
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);

    $sql = "UPDATE users SET name ='$nome', email = '$email' WHERE id = '$id'";
    $pdo->query($sql);
    header("Location: controleUsuarios.php");
}
$sql = "SELECT * FROM users WHERE id = '$id'";
$sql = $pdo->query($sql);

if ($sql->rowCount() > 0) {
    $dado = $sql->fetch();
} else {
    header("Location: controleUsuarios.php");
}


?>
<form method="POST">
    <h1>Atualizar Usuário</h1>
    Nome:<br />
    <input type="text" name="nome" value="<?php echo $dado['name'] ?>" /><br />
    E-mail:<br />
    <input type="text" name="email" value="<?php echo $dado['email'] ?>" /><br />

    <input type="submit" value="Atualizar" /><br />

</form>