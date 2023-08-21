<?php

#Zadatak 2

$n=5;
$m=23;
$mnozenje=1;

while($n<$m){
    $mnozenje=$n*$n;
    if($mnozenje>$m){
        echo "$mnozenje";
        break;
    }else{
        echo "Greska";
    }
    $n++;
}







#Zadatak 3

$i=30;
$zbir=0;

while($i<=100){
    $cifra = $i % 10;
    $broj = $i / 10;
    $zbir += $cifra;
    

    $poslednjaCifra=$i%10;

    if($poslednjaCifra%3==0 || $poslednjaCifra%5==0 || $zbir%4==0){
        
    }else{
        echo "$i ";
    }
        
    
$i++;
}

echo"<hr>";

#Zadatak 4

$a=5;
$b=50;

while($a<=$b){
    echo"$a ";
   $a=$a*3;
}

echo"<hr>";

#Zadatak Naci delitelje unesenog broja

$n=10;
$i=1;


for($i; $i<=($n/2); $i++){    #$n/2 provera se izvodi do polovine resenja
    if($n%$i==0){
        echo "$i ";
    }
}


#Zadatak 4 
#kreirati n paragrafa sa proizvoljnih tekstom i neizmenicno ih obojiti u tri razlicite boje

$n=12;
$i=1;

while($i<=$n){
    if($i%3==0){
        $boja='green';
    }elseif($i%3==1){
        $boja='red';
    }else{
        $boja='blue';
    }
    echo "<p style='color:$boja;'>Hello $i</p>";

    $i++;
}

#Zadatak 11

$n=6;
$i=1;

while($i<=$n){
    if($i%2==0){
        echo "<p><img style='border: 3px solid red;' src='slike//1.jpg'></p>";
    }else{
        echo "<p><img style='border: 3px solid blue;' src='slike//2.jpg'></p>";
    }

    $i++;
}




?>