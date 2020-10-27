<?php
// pode ser usando no javaScript 
setcookie("meuTeste", "rubia", time()+3600);
// no primeiro parametro é a chave oq vai identificar ele, segundo o valor e no terceiro é o tempo de duração
//time() hora atual , + os segundos 

echo "Meu Cookie  é : ".$_COOKIE["meuTeste"];