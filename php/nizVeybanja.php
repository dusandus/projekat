<?php
#Zadaci sa prezentacije

#Zadatak 1

$clubs=["Liverpool ", "Arsenal ", "Totenham ", "Not Forrest ", "Newcastle "];

for($i=0; $i<count($clubs); $i++){
    echo "$clubs[$i]";
}

echo"<hr>";

#Zadatak 2

$nizBrojeva=[3,4,9,5,1];
$suma=0;

for($i=0; $i<count($nizBrojeva); $i++){
    $suma+=$nizBrojeva[$i];
}
echo "Suma celobrojnog niza je: $suma";

echo"<hr>";

#Zadatak 3

$nizBrojeva=[3,2,9,6,8];
$brojUnizu=count($nizBrojeva);
$suma=0;
$brojac=0;


for($i=0; $i<count($nizBrojeva); $i++){
    $suma+=$nizBrojeva[$i];
}

$srednjaVrednost=$suma/$brojUnizu;
$n=$srednjaVrednost;

for($i=0; $i<$brojUnizu; $i++){
   if($nizBrojeva[$i]>$n){
    $brojac++;
   }
}


echo "Srednja vrednost je: $srednjaVrednost<br>";
echo "Vecih od srednje vrednosti je $brojac";
echo"<hr>";

#Zadatak 4

$nizBrojeva=[3,2,9,5,8,11];
$max=$nizBrojeva[0];

for($i=0; $i<count($nizBrojeva); $i++){
    $trenutniElement=$nizBrojeva[$i];
    if($trenutniElement>$max){
        $max=$trenutniElement;

    }
}
echo "$max";

echo"<hr>";
#Zadatak 5


$nizBrojeva=[3,2,9,5,-9,11];
$min=$nizBrojeva[0];

for($i=0; $i<count($nizBrojeva); $i++){
    $trenutniElement=$nizBrojeva[$i];
    if($trenutniElement<$min){
        $min=$trenutniElement;
    }
}
echo "$min";

echo"<hr>";


#Zadatak 6

$nizBrojeva=[3,2,9,51,-9,11];
$max=$nizBrojeva[0];
$indexMax=0;


for($i=0; $i<count($nizBrojeva); $i++){
    $trenutniElement=$nizBrojeva[$i];
    if($trenutniElement>$max){
        $max=$trenutniElement;
        $indexMax=$i;

    } 
}

echo "$indexMax";
echo"<hr>";

#Zadatak 15

$imena=["Ilija", "Ana", "Matija", "Aleksandar", "Ivana", "Dušan", "Stefan", "Uroš"];

for($i=0; $i<count($imena); $i++){

    $ime=$imena[$i];
    $duzinaStringa=mb_strlen($ime, "UTF-8");

    echo "<p>$ime $duzinaStringa</p>";

}


#Zadatak 15 
# Naci najduzi string

$imena=["Ilija", "Ana", "Matija", "Aleksandar", "Ivana", "Dušan", "Stefan"];

for($i=0; $i<count($imena); $i++){

    $najduziString=strlen($imena[$i]);
}

echo "<p>Najduzi string ima: $najduziString</p>";



$stringMaxDuzine=$imena[0];
$maxDuzina=strlen($imena[0]);


for($i=1; $i<count($imena); $i++){
    if(strlen($imena[$i])>$maxDuzina){
        $maxDuzina=strlen($imena[$i]);
        $najduzi=strlen($imena[$i]);
        $stringMaxDuzine=$najduzi;
    }
    
  
}

echo "$stringMaxDuzine";







?>