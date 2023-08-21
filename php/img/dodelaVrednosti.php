<?php

#Zadatak 1
$sati=13;
$minuti=33;

$prosoOdPonoci= ($sati*60)+$minuti;

echo "<p>$prosoOdPonoci</p>";

#Zadatak 2

date_default_timezone_set('Europe/Belgrade');

$trenutnoSati=date("G");
$trenutnoMinuta=date("i");

$prosoOdPonoci=($trenutnoSati*60)+$trenutnoMinuta;

echo"<p>Proslo od ponoci $prosoOdPonoci minuta</p>";

#Zadatak 3

$cenaRobe=920;
$novcanica= 2000;
$kusur=$novcanica-$cenaRobe;

echo"<p>Kusur je $kusur</p>";

#Zadatak 8

$galon=3.785;
$litara=50;

$konverzacijaIzlitrauGalon= $litara/$galon;
echo"<p>Konverzacija $konverzacijaIzlitrauGalon</p>";

# iz litra u galon

$galona= 6;

$litarKonverzacija= $galon*$galona;

echo "<p>Litara je: $litarKonverzacija</p>";


#Zadatak 9

$prvaOsoba= 2001;
$drugaOsoba=1977;

$trenutnaGodina=date("o");
$decenija=10;

$rezPrvaOsoba=floor(($trenutnaGodina-$prvaOsoba)/$decenija+1);
$rezDrugaOsoba=floor(($trenutnaGodina-$drugaOsoba)/$decenija+1);



echo "<p>Prva osoba je u: $rezPrvaOsoba. deceniji </p>";
echo "<p>Druga osoba je u: $rezDrugaOsoba. deceniji </p>";

#Zadatak 10

$a=4;
$b=8;

$povrsina= $a*$b;
echo "<p>Povrsina pravougaonika: $povrsina </p>";

$obim= 2*($a+$b);
echo "<p>Obim pravougaonika: $obim </p>";

$dijagonala= sqrt($a*$a + $b*$b);

echo "<p>Dijagonala pravougaonika: $dijagonala </p>";


#Zadtaka 11

$color1="green";
$color2="blue";

echo "<p style='color:green;'>$color1</p>";
echo "<p style='color:blue;'>$color2</p>";

#Zadatak 12

$pravaCena=70;
$popust=20;

$ceneSapopustom=$pravaCena-($pravaCena*($popust/100));

    echo "<p style='color:red;'>Prava cena: <s> $pravaCena</s></p>";
    echo "<p style='color:green;'>Cena sa popustom: $ceneSapopustom</p>";


#Zadatak 13


$r= rand(0, 255);
$g= rand(0, 255);
$b= rand(0, 255);

echo "<p style='color: $r;'> Dusan </p>";
echo "<p style='color: $g;'> Nesic </p>";





?>