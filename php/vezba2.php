<?php

$n=$i=3;
$m=23;
$mnozenje=1;

while($i<$m){
    $mnozenje*=$n;
 
    if($mnozenje>$m){
        echo "$mnozenje";
        break;
    }
$i++;
}

if($n>$m){
    echo "Greska";
}



/*

while($i<$m){
    if($n<$m){
        $mnozenje*=$n;
      
    }else{
        echo "greska";
    }

    if($mnozenje>$m){
        echo "$mnozenje";
        break;
    }

    $i++;
}

*/





?>