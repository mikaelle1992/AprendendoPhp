<?php
$nome2=filter_input(INPUT_POST,'nome2',FILTER_SANITIZE_SPECIAL_CHARS);
$lista=file_get_contents("lista.txt");

?>