<?php


echo "<br>";

#Zadatak 2

$i=20;
$proizvod=1;

while($i>=1){
   $proizvod*=$i;
    if($proizvod>10000){
        
        
        break;
    }


    $i--;
}

echo "Konacan rezultat<span style='color:red;'> $proizvod</span> a poslednji broj je <span style='color:green;' >$i</span>";




#Zadatak 3

$i=1;

while($i<=20){
    if($i%2==0){
        echo "<p>$i</p>";
    }else{

    }
        $i++;
}

#Zadatak 4

$i=1;
$n=8;

while($i<=$n){
    if($i%4==0){
        $boja="red";

    }elseif($i%4==1){
        $boja="blue";
    }elseif($i%4==2){
        $boja="green";
    }else{
        $boja="lime";
    }
    echo "<p style='color:$boja;'>Hello $i</p>";
    $i++;
}

#Zadatak 5

$i=1;
$n=6;

while($i<$n){
    $okvir="border:2px solid blue;";
    $okvir2="border:2px solid red;";
    if($i%2==0){
       echo "<p><img style='$okvir' src='img//twiter.jpeg'></p>";
    }else{
        echo "<p><img style='$okvir2' src='img//twiter.jpeg'></p>";
    }
    $i++;
}

#Zadatak 6

$i=1;
$sum=0;

while($i<=100){
    $sum+=$i;
    $i++;

}
echo "<p>Suma brojeva od 1 do 100 je: $sum</p>";

#Zadatak 7

$i=1;
$n=40;
$suma=0;

while($i<=$n){
    $suma+=$i;
    $i++;
}
echo "<p>Suma brojeva od 1 do 40 je: $suma</p>";

#Zadatak 8

$n=20;
$m=41;
$suma=0;

while($n<=$m){
    $suma+=$n;
    $n++;


}
echo "<p>Suma brojeva od 20 do 41 je: $suma</p>";

#Zadatak 9

$n=$i=2;
$m=5;
$proizvod=1;

while($i<=$m){
    $proizvod*=$i;
    $i++;
}
echo "<p>Proizvod brojeva od 2 do 5 je: $proizvod</p>";

#Zadatak 10

$n=$i=3;
$m=22;
$sumaparnih=0;
$sumaneparnih=0;

while($i<=$m){
    if($i%2==0){
        $sumaparnih+=$i**2;
       # $sumaparnih=($i*$i) +$sumaparnih; 
     
    }else{
        $sumaneparnih+=$i**3;
    }
    $i++;
}
echo "<p>Suma parnih brojeva: $sumaparnih</p>";
echo "<p>Suma neparnih brojeva: $sumaneparnih</p>";


#Zadatak vezbanja 1


#Zadatak

$i=1;
$deljivi=1;

while($i<=17){
    if($i%3==0){
        echo "<p>$i</p>";
      
    }
    $i++;
    
}









?>