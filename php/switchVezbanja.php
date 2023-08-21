<?php


$a=5;

switch($a){
    case "1":
        echo "Nedovoljan";
        break;
    case "2":
        echo "Dovoljan";
        break;
    case "3";
        echo"Dobar";
        break;
    case "4":
        echo "Vrlo dobar";
        break;
    case "5":
        echo "Odlican";
        break;
    default:
    echo "Nista od odabranog";

}
echo "<hr>";

#Zadatak 4

$a=6;
$b=2;
$znak="d";

switch($znak){
    case "m":
        $rezulat= $a*$b;      
        echo"$rezulat";
        break;
    case "d":
        $rezulat= $a/$b;   
        echo"$rezulat";
        break; 
     case "s":
        $rezulat= $a+$b;   
        echo"$rezulat";
        break;
    case "o":
        $rezulat= $a-$b;   
        echo"$rezulat";
        break;
    
        

}
echo "<hr>";

#Zadatak 5 

$dan=date("N");

switch($dan){
    case 1:
        echo "5 dana do vikenda";
        break;
    case 2:
        echo "4 dana do vikenda";
        break;
    case 3:
        echo "3 dana do vikenda";
        break;
    case 4:
        echo "2 dana do vikenda";
        break;
    case 5:
        echo "1 dan do vikenda";
        break;
    default:
        echo "Vikend je";

}

echo "<hr>";

#Zadatak 7

$mesec=date("n");
$god=date("o");


switch($mesec){
    case 1:
        echo "Januar 31";
        break;
    case 2:
        if($god%4==0 && $god%100!=0 || $god%400==0){
            echo "Februar 28";
        }else{
            echo "Februar 29";
        }
        break;
    case 3:
        echo "Mart 30";
        break;
    case 4:
        echo "April 31";
        break;
    case 5:
        echo "Maj 31";
        break;
    case 6:
        echo "Jun 30";
        break;
    case 7:
        echo "Jul 31";
        break;  
    case 8:
        echo "Avgust 31";
        break;  
    case 9:
        echo "Septebmar 30";
        break;
    case 10:
        echo "Oktobar 31";
        break; 
    case 11:
        echo "Novembar 30";
        break; 
    case 12:
        echo "Decembar 31";
        break; 
        
}




?>