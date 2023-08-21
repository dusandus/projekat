<?php

$godinaRodjenja=1997;

/*
if($godinaRodjenja%2==0 && $godinaRodjenja<=2000){
    echo "<p>Godina rodjenja je parna i rodjeni ste pre 2000</p>";

}else{
    if($godinaRodjenja<=2000){
        echo "<p>rodjeni ste pre 2000</p>";
    }else{
        echo "<p>rodjeni ste nakon 2000</p>";
    }
    if($godinaRodjenja%2==0){
        echo "<p>godina rodjenja je parna</p>";
    }else{
        echo "<p>godina rodjenja je neparna</p>";
    }
}*/

$pol="z";
$godina=19;

if($pol=="m" and $godina>=18){
    echo "<p>Pol je muski i osoba je punoletna</p>";
}else{
    if($pol=="m"){
        echo "<p>Osoba je muskog pola</p>";
    }else{
        echo "<p>Osoba je zenskog pola</p>";
    }
    if($godina>=18){
        echo "<p>Osoba je punoletna</p>";
    }else{
        echo "<p>Osoba je maloletna</p>";
    }

}

$a=3;
$b=13;
$c=5;

if($a>$b){
    $pom=$a;
    $a=$b;
    $b=$pom;
}
if($a>$c){
    $pom=$a;
    $a=$c;
    $c=$pom;    
    }
if($a>$c){
    $pom=$a;
    $a=$c;
    $c=$pom;
}

echo "<p>$b <= $c <= $a</p>";

$imeGrada=" Novi Sad  ";
$imeGrada=trim($imeGrada, " ");



if($imeGrada=="Beograd" || $imeGrada=="Novi Sad"){
    echo "<p>Imamo predstavnistvo u tom gradu</p>";
}else{
    echo "<p>Nemamo predstavnistvo u tom gradu</p>";
}

?>