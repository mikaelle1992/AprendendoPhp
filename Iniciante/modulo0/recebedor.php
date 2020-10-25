<?php
session_start();

$nome=filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);//verificar se a variavel é true.
$email = filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL);//aceitar o formato de email
$idade = filter_input(INPUT_POST,'idade',FILTER_SANITIZE_NUMBER_INT);// ou usar FILTER_VALIDATE_INT
//para reconhecer apenas numero

/*(SO ACEITA SE FOR CERTINHO)
FILTER_VALIDATE_EMAIL
//FILTER_VALIDATE_FLOAT
//FILTER_VALIDATE_IP
//FILTER_VALIDATE_URL*/


/*( O SANITIZE ELE LIMPA) 
FILTER_SANITIZE_EMAIL
FILTER_SANITIZE_STRING
FILTER_SANITIZE_SPECIAL_CHARS
FILTER_SANITIZE_URL
FILTER_SANITIZE_NUMBER_FLOAT*/

if($nome && $email && $idade){
    
    setcookie('nome',$nome,time()+(86400*30));

    echo 'NOME:'.$nome."<br/>";
    echo 'E-MAIL:'.$email."<br/>";
    echo 'IDADE:'.$idade;
}else{
    $_SESSION['aviso']='preencha os itens corretamente! ';

   header("Location:curso.php");
   exit;//cancelar a execução do restante.
}
?>