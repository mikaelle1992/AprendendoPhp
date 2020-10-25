<?php
$ingredientes = [
 'açucar',
 'farinha de trigo',
 'ovo',
 'leite',
 'fermento em pó'
];

echo"<h2>Ingredientes </h2>";
/*foreach($ingredientes as $valor){
    echo 'Item:'.$valor."<br/>";
}
*/

/*foreach($ingredientes as $chaves =>  $valor){
    echo 'Item '.$chaves.' : '.$valor."<br/>";
}
*/
echo"<ul>";
foreach($ingredientes as $chaves =>  $valor){
    echo "<li>".$valor."</li>";
}
echo"</ul>";
