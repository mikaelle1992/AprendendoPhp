<?php
if(!empty($_POST['codigo'])){
    $codigo = $_POST['codigo'];
    if($codigo == 'mikaelle'){
        header("Location: pagina2.php");
    }else{
        echo"Acesso negado!";
    }
}
?>
<form method="POST">
    DIGITE 'MIKAELLE' PARA PASSAR:
    </br></br>
    <input type="text" name="codigo" /></br></br>

    <input type="submit" value="Enviar"/>
</form>