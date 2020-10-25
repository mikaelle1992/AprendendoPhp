<?php

if(isset($_FILES['arquivos'])){

    if(count($_FILES['arquivos']['tmp_name']) > 0){
        for($i = 0; $i < count($_FILES['arquivos']['tmp_name']);$i++){
            $nomeArquivo =rand(0, 99).$_FILES['arquivos']['name'][$i];

            move_uploaded_file($_FILES['arquivos']['tmp_name'][$i],'arquivos/'.$nomeArquivo);
        }
        echo "arquivos enviados!";
    }
}
//multiple : permite selecionar mas de um arquivo 
?>
<form method="POST" enctype="multipart/form-data">
    Arquivos:<br/>
    <input type="file" name="arquivos[]" multiple/><br/><br/>
    

    <input type="submit" value="Enviar arquivos"/>
</form>