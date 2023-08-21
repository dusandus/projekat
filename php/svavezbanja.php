<?php
#Zadatak 1

$a=5;
$b=9;

if($a>$b){
    echo "<p>broj $a je veci</p>";

}else{
     echo "<p>broj $b je veci</p>";
}

#Zadatak 2

$a=31.3;

if($a>=0){
    echo "<p>Temperatura je u plusu</p>";
}else{
    echo "<p>Temperatura je u minusu</p>";
}

#Zadatak 3
$vreme=date("a");

if($vreme=="am"){
    echo "<p>Jutro</p>";
}else{
    echo "<p>Vece</p>";
}
#Zadatak 5
$currentYear=date("o");
$godinaRodjenja=2005;
$puneltan=$currentYear-$godinaRodjenja;
$currentMonth=date("n");
$mesec=3;
$mesecPunoletan= $currentMonth-$mesec;



if($puneltan>=18 && $mesecPunoletan>=0 ) {
    echo "<p>Osoba je punoletna</p>";
}else{
    echo "<p>Osoba je maloletna</p>";
}


#Zadatak 6

$a=16;

if($a<10){
    echo "<p>Prva desetica</p>";
}elseif($a<20){
    echo "<p>Druga desetica</p>";
}else{
    echo "<p>Veci je od 20</p>";
}

#Zadatak 7

$poena=43;

if($poena<=50){
    echo "<p>Nazalost pali ste ispit</p>";
}elseif($poena <=60){
    echo "<p>Dobili ste 6</p>";

}elseif($poena <=70){
    echo "<p>Dobili ste 7</p>";

}elseif($poena <=80){
    echo "<p>Dobili ste 8</p>";

}elseif($poena <=90){
    echo "<p>Dobili ste 9</p>";

}else{
    echo "<p>Dobili ste 10</p>";
}

#Zadatak8

$dan=date("N");

if($dan<=5){
    echo "<p>Radni dan</p>";
}else{
    echo "<p>Vikend</p>";
}

#Zadatak 9

$vreme=date("G");

if($vreme<12){
    echo "<p>Dobro jutro</p>";  
}elseif($vreme<18){
    echo "<p>Dobar dan</p>";
}else{
    echo "<p>Dobro vece</p>";
}

#Zadatak 10

$dan1=13;
$mesec1=5;
$godina1=2003;

$dan2=15;
$mesec2=11;
$godina2=1999;


if($godina1<$godina2){
    echo "<p>Prvi datum je stariji</p>";
}elseif($godina2<$godina1) {
    echo "<p>Drugi datum je stariji</p>";
}elseif($mesec2<$mesec1){
    echo "<p>Prvi datum je stariji</p>";
}elseif($mesec2>$mesec1){
    echo "<p>Drugi datum je stariji</p>";

}elseif($dan1<$dan2){
    echo "<p>Prvi datum je stariji</p>";

}elseif($dan2<$dan1){
    echo "<p>Drugi datum je stariji</p>";
}else{
    echo "<p>Datumi su isti</p>";
}


#Zadatak 11

$radnoVreme=date("G");

if($radnoVreme<9 || $radnoVreme>=17){
    echo "<p>Firma ne radi</p>";
}else{
    echo "<p>Firma radi</p>";
}

#Zadatak 12

$p1=9;
$k1=17;

$p2=13;
$k2=21;

#Zadatak 15

$a=12;
$b=21;

if($a>$b){
    $c=$a-$b;
    echo "<p>Rezultat je: $c</p>";
}else{
    $c=$b-$a;
    echo "<p>Rezultat je: $c</p>";
}

#Zadatak 16

$a=4;

if($a<=0){
    $b=$a-1;
    echo "<p>Rezultat je: $b</p>";
}else{
    $b=$a+1;
    echo "<p>Rezultat je: $b</p>";
}

#Zadatak 17

$a=14;
$b=11;
$c=23;

$max=$a;
if($b>$max){
    $max=$b;
}if($c>$max){
    $max=$c;
}
$min=$a;
if($b<$min){
    $min=$b;
}if($c<$min){
    $min=$c;
}

#$sr=($a+$b+$c)/3;
$sr=($a + $b+$c) -($min+$max);
echo "<p>$min <=$sr <= $max";

$pol="z";
$godina=12;

if($pol=="m" && $godina>=18){
    echo "<p>Muskarac punoletan</p>";
}elseif($pol=="m" && $godina<18){
    echo "<p>Muskarac maloletan</p>";
}elseif($pol=="z" && $godina>=18){
    echo "<p>Zena punoletana</p>";
}else{
    echo "<p>Zena maloletana</p>";
}

#Zadatak 19

$a=19;
$b=5;
$c=13;

$max=$a;

if($b>$max){
    $max=$b;

}if($c>$max){
    $max=$c;
}
$min=$a;
if($b<$min){
    $min=$b;
}if($c<$min){
    $min=$c;
}

$sr=($a+$b+$c) -($max+$min);

echo "<p>$max, $sr, $min</p>";

#Zadatak 20

$a=11;
$b=18;

if($a>$b && $a%2==0){
    echo "<p>Veci broj je $a i paran je</p>";
}elseif($a>$b && $a%2!=0){
    echo "<p>Veci broj je $a i neparan je</p>";
}elseif($b>$a && $b%2==0){
    echo "<p>Veci broj je $b i paran je</p>";
}else{
    echo "<p>Veci broj je $b i neparan je</p>";
}

#Zadatak 21

$a=6;
$b=22;
$c=19;

$max=$a;
if($b>$max){
    $max=$b;
}if($c>$max){
    $max=$c;
}

echo "<p>$max</p>";


#Zadatak 22

$temp=31;

if($temp<-15 || $temp>40){
    echo "<p>esktremna temperatura</p>";
}else{
    echo "<p>normalna temperatura</p>";
}

$god= date("o");

if($god%4==0 && $god%100!=0 || $god%400==0){
    echo "<p>Godina je prestupna</p>";
}else{
    echo "<p>Godina nije prestupna</p>";
}

$a=35;
$b=125;
$c=97;

$min=$a;

if($b<$min){
    $min=$b;
}if($c<$min){
    $min=$c;
}
$usteda = $min-1;
echo "<p>Usteda: $usteda</p>";

$popust=1;
$min=$popust;
$cenasapopustom=$b+$c + $popust;
echo "<p>Cena sa popustom je: $cenasapopustom</p>";


?>