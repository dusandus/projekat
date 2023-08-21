<?php

$zaIsplatu5000=0;
$zaIsplatu2000=0;
$zaIsplatu1000=0;
$zaIsplatu500=0;

$iznos=17000;


while($iznos>=5000){
    $zaIsplatu5000++;
    $iznos-=5000;
 
    
}

while($iznos>=2000){
    $zaIsplatu2000++;
    $iznos-=2000;
}

while($iznos>=1000){
    $zaIsplatu1000++;
    $iznos-=1000;
}

while($iznos>=500){
    $zaIsplatu500++;
    $iznos-=500;
}

if($zaIsplatu5000>0){
    echo "Isplatiti $zaIsplatu5000 novcanica od 5000 <br>";
}


if($zaIsplatu2000>0){
    echo "Isplatiti $zaIsplatu2000 novcanica od 2000 <br>";
}

if($zaIsplatu1000>0){
    echo "Isplatiti $zaIsplatu1000 novcanica od 1000 <br>";
}

if($zaIsplatu500>0){
    echo "Isplatiti $zaIsplatu500 novcanica od 500 <br>";
}


















?>