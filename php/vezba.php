<?php
/*Zadatak 1*/
$h=16;
$m=33;
$rezultat=$h*60+$m;
echo "Rezultat je: " . $rezultat; 
echo "<hr>";
/*Zadatak 2*/ 
$sati= date('G');
$minuti=date('i');

$rez= $sati*60 + $minuti;
echo $rez;
echo "<hr>";
/*Zadatak 3*/
$cena=54;
$nov=100;
$kusur=$nov-$cena;
echo "Kusur je: ". $kusur;
echo "<hr>";

/*Zadatak 4*/
$eur=50;
$kurs=117.5;
$dinara=$eur*$kusur;
echo $dinara;
echo "<hr>";

/*Zadatak 5*/
$din=3450;
$kurs=117.5;
$eur=$din/$kurs;
echo $eur;
echo "<hr>";

/*Zadatak 6*/
$eur=70;
$kursEuroDinar= 117.5;
$kursDolDin=114.3;
$dinar=$eur *$kursEuroDinar;
$dol= $dinar/$kursDolDin;
echo "Konverzacija u dolarima je:" . $dol;
echo "<hr>";
/*Zadatak 7*/
$dol=90;
$kursEuroDinar;
$kursDolDin;
$dinara=$dol*$kursDolDin;
$eura=$dinara/$kursEuroDinar;
echo "Konverzacija u eurima je:" . $eura;
echo "<hr>";
/*Zadatak 10*/

$cena=70;
$popust=20;
$cenaBezPopusta= $cena *($popust/100)+$cena;
echo "Cena bez popusta: " .$cenaBezPopusta;
echo "<hr>";

/*Zadatak 11*/
$n=56;
$brojDanaZaPiti=floor($n/3);
echo "Broj dana koji treba piti: ". $brojDanaZaPiti;
echo "<br>";
$brojNeiskoriscenihTableta= $n%3;
echo "Broj neiskoriscenih tableta: ".$brojNeiskoriscenihTableta;






?>