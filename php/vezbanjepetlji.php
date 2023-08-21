<?php

#Zadatak 12

$i=1;
$n=17;
$count=0;

while($i<=$n){
   if($n%$i==0){
    $count++;
   } 
   $i++;

}
if($count>2){
    echo "<p>Broj nije prost</p>";
}else{
    echo "<p>Broj je prost</p>";
}

#zadatak 11

$i=1;
$k=10;
$brojac=0;

while($i<=$k){
    if($k%$i==0){
        $brojac++;          #Preboroji mi ih koliko ih ima
       #echo "<p>Brojeva daljivih sa 12 su $i</p>";  #ako zelim da vidim koji su to brojevi
    }
    $i++;
    
}
echo "<p>Brojeva daljivih sa 10 je $brojac</p>";



?>