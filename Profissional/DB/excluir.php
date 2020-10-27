
<?php
require 'config.php';

if(isset($_GET['id']) && empty($_GET['id']) == false){
     $id= addslashes($_GET['id']);

    $sql = "DELETE FROM users WHERE id = '$id'";
    $pdo->query($sql);

    header("Location: controleUsuarios.php");
}else{
   header("Location: controleUsuarios.php");
}

?>