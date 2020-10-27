<?php
require 'config.php';
?>
<a href="novoUsuario.php">Adicionar usuario</a>
<table border="0" width="100%">
    <tr>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Ações</th>
    </tr>
    <?php
     $sql = "SELECT * FROM users";
     $sql = $pdo->query($sql);
     if($sql->rowCount()>0){
        //echo "Esta tudo bem!";
        foreach($sql->fetchAll() as $usuario){
            echo '<tr>';
            echo '<td>'.$usuario['name'].'</td>';
            echo '<td>'.$usuario['email'].'</td>';
            echo '<td><a href ="editar.php?id='.$usuario['id'].'">Editar</a> - <a href ="excluir.php?id='.$usuario['id'].'">Excluir</a></td>';
          
           echo '</tr>';
        }
     }
    ?>

</table>