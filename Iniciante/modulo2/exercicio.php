<?php

$linha = "-";



for($i=0;$i<5;$i++){
     
      for($j=0;$j<5;$j++){
        echo $linha;
      } 
      echo $linha."<br/>";
}

$linha2 = 0;
while ($linha2 <= 20) {
    for ($i = 0; $i < $linha2; $i++) {
        echo "-";
    }
    echo "<br/>";
    $linha2 += 1;
}