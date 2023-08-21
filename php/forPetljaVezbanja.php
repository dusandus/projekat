<?php

#Zadatak 1

for($i=1; $i<=20; $i++){
    echo "$i ";

}

echo "<hr>";

#Zadatak 2

for($i=20; $i>=1; $i--){
    echo "$i ";

}
echo "<hr>";
#Zadatak 3

for($i=1; $i<=20; $i++){
    if($i%2==0){
        echo "$i ";
    }
}
echo "<hr>";

#Zadatak 4


for($i=5; $i<=15; $i++){
    $double=$i*2;
    echo"$double ";
}
echo "<hr>";

#Zadatak 5

$sum=0;

for($i=1; $i<=100; $i++){
    $sum+=$i;
    
}
echo "<p>$sum</p>";


#Zadatak 6

$n=50;
$suma=0;

for($i=1; $i<=$n; $i++){
    $suma+=$i;
}
echo "<p>$suma</p>";

#Zadatak 8

$n=4;
$m=10;
$proizvod=1;

for($n; $n<=$m; $n++){
    $proizvod*=$n;

}
 
echo "<p>$proizvod</p>";


#Zadatak 9

$n=$i=4;
$m=12;
$sum=0;

for($i; $i<=$m; $i++){
    $sum=$sum+($i*$i);
}

echo "<p>$sum</p>";

#Zadatak 11
$sum=0;

for($i=1; $i<=30; $i++){
    if($i%9==0){
        $sum+=$i;
    }
}

echo "$sum";
echo "<hr>";

#Zadatak 13

$brojac=0;

for($i=5; $i<=150; $i++){
    if($i%13==0){
        $brojac++;
    }
}

echo "Brojeva deljivih sa 13 ima: $brojac";
echo "<hr>";
#Zadatak 15

$n=$i=-9;
$m=10;
$brojac1=0;
$brojac2=0;

for($i; $i<$m; $i++){
    if($i<0){
        $brojac1++;
    }else{
        $brojac2++;
    }
}

echo "<p>manjih od 0 ima: $brojac1</p>";
echo "<p>vecih od 0 ima: $brojac2</p>";


#Zadatak 16
#odrediti prosecnu ocenu razreda od 30 ucenuka na pismenom

$i=1;
$ocena=rand(1,5);
$suma=0;


for($i; $i<=30; $i++){
    $suma+=$ocena;
    

}

$prosek=$suma/$i;

echo "$prosek ";

?>