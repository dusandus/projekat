<?php

#Zadatak 3 
// Dat je niz elemenata u obliku NazivPredmeta/Ocena koju student ima.

$niz=array(
    "Matematika"=>5,
    "Srpski"=>3,
    "Engleski"=>3,
    "Hemija"=>2,
    "Fizicko"=>5,
    "Anatomija"=> 3,
    "Farmakologija"=> 4


);

foreach($niz as $key => $value){
    echo "<p>Naziv predmeta $key ocena: $value</p>";
}

//Odrediti najveću ocenu studenta koju ima, i ispisati predmete na kojima je dobio najveću ocenu.

$najvecaOcena=1;

foreach($niz as $value){
    if($value>$najvecaOcena){
        $najvecaOcena=$value;
    }
}

foreach($niz as  $key=>$value){
  if($value==$najvecaOcena){
    echo "<p>Najveca ocena $najvecaOcena iz predmeta $key</p>";
  }
}
//Odrediti prosečnu ocenu studenta i ispisati predmete na kojima je dobio ocenu veću od prosečne.

$suma=0;
$brojac=0;

foreach($niz as $key => $value){
    $suma+=$value;
    $brojac++;
}

$prosecnaOcena=$suma/$brojac;
echo "$prosecnaOcena";


foreach($niz as $key => $value){
    if($value>$prosecnaOcena){

        echo "<p>$key</p>";
    }
}

echo "<hr>";
//Zadatak 1

//Dat je niz elemenata u obliku MarkaAuta/Godište.

$cars=array(
    "Audi"=> 2004,
    "Citroen"=>2019,
    "Citoren C4"=> 2004,
    "BMW"=>2012,
    "Opel Astra" => 2009
);

foreach($cars as $key => $value){
    echo "<p>$key godiste $value</p>";
}

$trenutnaGodina=date("Y");

foreach($cars as $key => $value){
    if(($trenutnaGodina-$value)>10){
        echo "<p>Automobili stariji od 10 god su: $key</p>";
    }

}
//Ispisati automobile čija Marka sarži string “Opel”, a proizvedena su posle 2000. godine.
foreach($cars as $key => $value){
    if(str_contains($key,"Opel")&& $value>2000){
        echo "<p>$key</p>";
    }


}
//Zadatak 2


$osobe = array(
    "Ana" => 164,
    "Dusan" => 198,
    "Ilija" => 198,
    "Sandra " => 163,
    "Vanja" => 170,

);



foreach($osobe as $key => $value){
    echo "<p>$key je visine $value</p>";
}

//ispisati natprosecno visoke osobe

$brojac=0;
$suma=0;

foreach($osobe as $key =>$value){
        $suma+=$value;
        $brojac++;
}

$prosecanaVisina=$suma/$brojac;

foreach($osobe as $key =>$value){
    if($value>$prosecanaVisina){
        echo "<p>Natrposecno visoke osobe su: $key</p>";
    }
}

$maxVisina=0;

foreach($osobe as $key =>$value){
    if($value>$maxVisina){
        $maxVisina=$value;
       
    }
}

foreach($osobe as $key =>$value){
    if($maxVisina==$value){
        echo "<p>Osoba sa maksimalnim visinom su: $key</p>";
    }
}

foreach($osobe as $key =>$value){
    if($value<$prosecanaVisina && $key[0]=="V"){
        echo "<p>$key</p>";
    }

}

?>