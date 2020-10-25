
<form  method="POST">
    <label> Nome:</label>
        <br>
        <input type ="text" name ="nom"/>
        <input type="submit" value="Adicionar" ><br/>
    <h2>Lista de nomes </h2>
    <ul>
<?php
$nome=filter_input(INPUT_POST,'nom',FILTER_SANITIZE_SPECIAL_CHARS);
$lista=file_get_contents("list.txt");

if($nome){
    $arrayList = explode("\n",$lista);

     if(in_array($nome,$arrayList)){//verifica de $nome , esta no arquivo 
       echo "<strong>Nome já cadastrado ! </strong><br/><br/>";
     }else{
         $lista .="\n$nome";
         file_put_contents("list.txt","$lista");

}
$lista= explode("\n",$lista);
foreach($lista as $key => $item){
echo "<li>".$item."</li>";
}
}else{
    //mostra a lista caso nenhum nome tenha sido digitado
     $lista= explode("\n",$lista);
     foreach($lista as $key  => $item){
     echo "<li>".$item."</li>";
 }
 exit;
}
?>

</ul>
</form>
