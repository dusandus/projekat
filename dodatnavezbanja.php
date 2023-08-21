<?php


$n=$i=7;
$m=70;
$mnozenje=1;

while($i<$m){

    if($n<$m){
        $mnozenje=$n*$n;
    }else{
        echo "Greska";
    }
    if($mnozenje>$m){
        echo"$mnozenje";
        break;
       

    }


    $i++;
}



?>