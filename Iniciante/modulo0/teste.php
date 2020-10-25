<?php
session_start();
$conecta=pg_connect("host=localhost port=80 dbname=biblioteca user=postgres password=1");

if(!$conecta){
	die("ERRO");
}

if(isset($_POST["nome"]) && isset($_POST["senha"])){
	$user=$_POST["nome"];
	$pwd=$_POST["senha"];
 
 $prep=pg_prepare($conecta,"login","select * from login where usuario=$1 and senha=$2");

$result= pg_execute($conecta ,"login" , array($user,$pwd));
/*echo pg_num_rows($result);*/


if(pg_num_rows($result)>0){
	$linha=pg_fetch_array($result);
$_SESSION["cod"]=$linha["codigo"];
$_SESSION["usuario"]= $linha["usuario"];

}else{
	die("user ou pwd invalidos");

}
}else{
	
	die("não mandou");
	
}
pg_close($conecta);
header("location:../index.php");

?>



