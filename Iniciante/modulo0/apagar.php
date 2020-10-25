<?php
setcookie('nome',$nome,time()-3600);
header("Location: curso.php");
exit;

?>