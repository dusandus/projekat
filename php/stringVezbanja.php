<?php

$names=["Ilija", "Ana", "Matija", "Aleksandar"];

$najviseKaraktera=strlen($names[0]);
$najduziString=$names[0];

for($i=1; $i<count($names); $i++){
    if(strlen($names[$i])>$najviseKaraktera){
        $najviseKaraktera=strlen($names[$i]);
        $najduziString=$names[$i];
    }
}

echo "<p>$najduziString</p>";

#$duzinaStringa=strlen($names[$i]);
$suma=0;
$brojac=0;
$brojac1=0;


for($i=0; $i<count($names); $i++){
    $duzinaStringa=strlen($names[$i]);
    $suma+=$duzinaStringa;
    $brojac++;
}

$prosecnaDuzina=$suma/$brojac++;


for($i=0; $i<count($names); $i++){
    if(strlen($names[$i])>$prosecnaDuzina){
        $brojac1++;
    }

}
echo "$brojac1";


echo"<hr>";

//Zadatak 14 
//Ispisati duzinu svakog elementa u nizu strinigova

$imena=["Ilija", "Stefan","Marko", "Marija"];

for($i=0; $i<count($imena); $i++){
    $ime=$imena[$i];
    $duzinaImena=strlen($ime);
    echo "<p>Duzina srtinga $ime je $duzinaImena</p>";
}

//16 zadatak
// Odrediti broj elemenata u nizu stringova čija je dužina veća od prosečne dužine svih stringova u nizu.

$imena=["Ilija", "Stefan","Marko", "Marija"];
$suma=0;
$brojac=0;
$brojac2=0;

for($i=0; $i<count($imena); $i++){
    $duzinaStrina=strlen($imena[$i]);
    $suma+=$duzinaStrina;
    $brojac++;
}

$prosecnaDuzina=$suma/$brojac;

for($i=0; $i<count($imena); $i++){
    if(strlen($imena[$i])>$prosecnaDuzina){
        $brojac2++;
    }
}

echo "<p>Broj elemena cija je duzina veca od prosecna duzine $brojac2</p>";



//Zadatak 17
//Odrediti broj elemenata u nizu stringova koji sadrže slovo 'a'. 



//Zadatak 18 
// Odrediti broj elemenata u nizu stringova koji pocinju na slova "a" ili "A".

$imena=["Ilija", "Stefan","Marko", "Marija", "Adam", "aar", "Aca"];

$brojac=0;

for($i=0; $i<count($imena); $i++){
    if(strtolower($imena[$i][0])=="a" || strtoupper($imena[$i][0])=="A"){
        $brojac++;
    }
}
echo "$brojac";

?>