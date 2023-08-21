<?php
#Zadatak 2
$a=-31.3;

if($a>=0){
    echo "<p>Temperatura je u plusu</p>";
}else{
    echo "<p>Temperatura je u minusu</p>";
}
#Zadatak 3

$pol="M";

if($pol=="M"){
    echo "<p><img src='###' alt='Logo1'></p>";
}else{
    echo "<p><img src='###' alt='Logo2'></p>";
}
#Zadatak 4

$vreme=date("a");

if($vreme=="am"){
    echo "<p>Pre podne je</p>";
}else{
    echo "<p>Posle podne je</p>";
}

#Zadatak 5

$trenutnaGodina=date("Y");
$godina=2002;
$razlika=$trenutnaGodina-$godina;
if($razlika>=18){
    echo "<p>Osoba je punoletna</p>";
}else{
    echo "<p>Osoba je maloletna</p>";
}

#Zadatak 7


$poeni=42;

if($poeni<=50){
    echo "<p>Ucenik je pao ispit</p>";
}elseif($poeni <=60){
    echo "<p>Ucenik je dobio 6</p>";
}elseif($poeni <=70){
    echo "<p>Ucenik je dobio 7</p>";
}elseif($poeni <=80){
    echo "<p>Ucenik je dobio 8</p>";
}elseif($poeni<=90){
    echo "<p>Ucenik je dobio 9</p>";
}else{
    echo "<p>Ucenik je dobio 10</p>";
}

#Zadatak 8

$dan=date("N");

if($dan==1){
    echo "<p>Monday</p>";
}elseif($dan==2){
    echo "<p>Tuesday</p>";
}elseif($dan==3){
    echo "<p>Wednesday</p>";
}elseif($dan==4){
    echo "<p>Thursday</p>";
}elseif($dan==5){
    echo "<p>Friday</p>";
}elseif($dan==6){
    echo "<p>Saturday</p>";
}else{
    echo "<p>Sunday</p>";
}

#Zadatak 9

$vreme=date("G");

if($vreme<12){
    echo "<p>Dobro jutro</p>";
}elseif($vreme<18){
    echo "<p>Dobar dan</p>";

}else{
    echo "<p>Dobaro vece</p>";

}
#Zadatak 10
$datum=date('m.d');
echo $datum;
$d1=4.14;
$d2= 3.28;
$razlika1=$datum-$d1;
$razlika2=$datum-$d2;



if($razlika1>$razlika2){
    echo "<p>Prvi datum je stariji</p>";
}else{
    echo "<p>Drugi datum je stariji</p>";
}

#Zadatak 11

$h=date("G");
$m=date("i");

$trenutnoVreme= $h.".".$m;
echo $trenutnoVreme;

if($trenutnoVreme<9){
    echo "<p>Ne Radimo</p>";
}elseif($trenutnoVreme>=17){
    echo "<p>Ne Radimo</p>";
}else{
    echo "<p>Radimo</p>";
}
#Zadatak 13
$a=4;

if($a%2==0){
    echo "<p>Broj je paran</p>";
}else{
    echo "<p>Broj je neparan</p>";
}

#Zadatak 14

$a=9;

if($a%3==0){
    echo "<p>Broj je deljiv sa 3</p>";
}else{
    echo "<p>Broj nije deljiv sa 3</p>";
}

#Zadatak 15

$a=14;
$b=7;

if($a>$b){
    $c=$a-$b;
    echo "<p>$c</p>";
}else{
    echo "<p>Nije moguce oduzeti</p>";
}

#Zadatak 16

$a=3;
if($a<=0){
    $b=$a-1;
    echo "<p>$b</p>";
}else{
    $b=$a+1;
    echo "<p>$b</p>";
}

#Zadatak 17

#Zadatak 18

$a=5;

if($a){
    echo "<p>Broj je ceo</p>";
}else{
    echo "<p>Broj je sa decimalom</p>";

}
$a=10;
while ($a<=99) {
$a+=5;
echo "$a <br>";
}


?>