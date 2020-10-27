<?php
require 'config.php'
?>
<html>
    <head>
        <title>Controle de Usuarios</title>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
<body>
    <header>
        <div class="titulo">
            <h1>Controle de Usuários</h1>
        </div>
        
    </header>
    
<a href="adicionar.php">Adicionar Novo usuário</a>
<table border="1px solid" width=100%>
        <tr>
            <th>Nome</th>
            <th>E-email</th>
            <th>Ações</th>
        </tr>
        <?php
        $sql = "SELECT *FROM users";
        $sql = $pdo->query($sql);

        if ($sql->rowCount() > 0) {
           foreach($sql->fetchAll() as $usuarios){
               echo '<tr>';
               echo '<td>'.$usuarios['name'].'</td>';
               echo '<td>'.$usuarios['email'].'</td>';
               echo '<td><a href="editar.php?id='.$usuarios['id'].'" >Editar</a><a href="excluir.php?id='.$usuarios['id'].'">Excluir</a></td>';

               echo '</tr>';
           }
          
     } else {
            echo "não há usuarios";
     }

        ?>
    </table>

    </html>