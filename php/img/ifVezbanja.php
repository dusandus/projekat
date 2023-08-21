

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    
</body>
</html>
<?php


#Zadatak 5

$a=6;
$b=9;

if($a>$b){
   # echo "<p style='color:green;'> $a </p>";
   # echo "<p style='color:red;'> $b </p>";
}else{
    #echo "<p style='color:green;'> $b </p>";
    #echo "<p style='color:red;'> $a </p>";
}


#2.nacin


$a=10;
$b=9;

if($a>$b){
    echo "<p class='green'> $a </p>";
    echo "<p class='blue'> $b </p>";


}else{
    echo "<p class='blue'> $a </p>";
    echo "<p class='green'> $b </p>";
}
    echo "<hr>";
#Zadatak 6

$n=11;

if($n<0){
    echo "<p class='red'> $n </p>";
}elseif($n<=10){
    echo "<p class='blue'> $n </p>";
}else{
    echo "<p class='green'> $n </p>";
}

#Zadatak 8

$temp=-1;

if($temp>0){
    echo "<p>Temperatura je u plusu</p>";
}else{
    echo "<p>Temperatura je u minusu</p>";
}

#Zadatak 10

$vreme=date("a");

if($vreme=="am"){
    echo "Prepodne je";

}else{
    echo "Popodne je";
}

#Zadatak 11

$trenutnaGodina=date("o");
$godina=2001;

$ispitivanje=$trenutnaGodina-$godina;

if($ispitivanje>=18){
    echo "<p>Osoba je punoletna</p>";
}else{
    echo "<p>Osoba je maloletna</p>";
}

#Zadatak 13

$poeni=98;

if($poeni<=50){
    echo "<p>Ucenik je pao ispit</p>";
}elseif($poeni<=60){
    echo "<p>Ucenik je dobio 6</p>";
}elseif($poeni<=70){
    echo "<p>Ucenik je dobio 7</p>";
}elseif($poeni<=80){
    echo "<p>Ucenik je dobio 8</p>";
}elseif($poeni<=90){
    echo "<p>Ucenik je dobio 9</p>";
}else{
    echo "<p>Ucenik je dobio 10</p>";
}


#Zadatak 14

$dan=date("N");

if($dan<=5){
    echo "<p>Radni je dan</p>"; 
}else{
    echo "<p>Vikend je</p>"; 
}

#Zadatak 15

$vreme=date("G");

if($vreme<12){
    echo "<p>Dobro jutro</p>";  
}elseif($vreme<18){
    echo "<p>Dobar dan</p>"; 

}else{
    echo "<p>Dobro vece</p>"; 
}


#Zadatak 16

$dan=13;
$mesec=4;
$godina=2003;

$dan1=12;
$mesec1=4;
$godina1=2003;


if($godina1<$godina){
    echo "<p>Drugi datum je raniji</p>"; 
}elseif($godina1>$godina){
    echo "<p>Prvi datum je raniji</p>"; 
}elseif($mesec1<$mesec){
    echo "<p>Drugi datum je raniji</p>"; 
}elseif($mesec1>$mesec){
    echo "<p>Prvi datum je raniji</p>";
}elseif($dan1<$dan){
    echo "<p>Drugi datum je raniji</p>"; 
}else{
    echo "<p>Prvi datum je raniji</p>"; 
}


#Zadatak 17

$radnoVreme=date("G");

if($radnoVreme<9 &&$radnoVreme>17){
    echo "<p>Ne radimo</p>"; 
}else{
    echo "<p>Radimo</p>"; 
}

#Zadatak 18

$p1=7;
$k1=15;

$p2=16;
$k2=6;

if($k1<$p2 && $p1>$k2){
    echo "<p>DA</p>"; 
}else{
    echo "<p>NE</p>"; 
}

#Zadatak 21

$a=11;
$b=9;

if($a>$b){
    $c=$a-$b;
    echo "$c";
}else{
    $c=$b-$a;
    echo "$c";
}

echo "<hr>";

#Zadatak 22

$n=10;

if($n<=0){
    $prethodnik=$n-1;
    echo"$prethodnik";
}else{
    $sledbenik=$n+1;
    echo "$sledbenik";
}

echo "<hr>";

#Zadatak 24

$n=5.2;

if(is_int($n)){
    echo"Broj je ceo";
}else{
    echo"Broj nije ceo";
}
echo "<hr>";

#Zadatak 25

$a=11;
$b=10;
$max=$a;

if($b>$max){
    $max=$b;
}
if($max%2==0){
    echo "Veci broj je paran";
}else{
    echo "Veci broj je neparan";
}
echo "<hr>";

#Zadatak 26
$a=5;
$b=11;
$c=9;

$max=$a;

if($b>$max){
    $max=$b;
}
if($c>$max){
    $max=$c;
}

echo "Najveci broj je $max";
echo "<hr>";

#Zadatak 28

$godina=date("o");

if($godina%4==0 && $godina%100!=0 || $godina%400==0){
    echo "<p>$godina je prestupna</p>";
}else{
    echo "<p>$godina nije prestupna</p>";
}


#Zadatak 29


$radnoVreme=date("G");
$dan=date("N");

if($dan<=5 && $radnoVreme<=9 && $radnoVreme>20){
    echo "<p>Butik je zatvoren</p>";
}elseif($dan>5 && $radnoVreme<=10 && $radnoVreme>18){
    echo "<p>Butik je zatvoren</p>";
}else{
    echo "<p>Butik je otvoren</p>";
}

#Zadatak 30












?>