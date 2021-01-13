<?php
//Exercice 5
//Initialiser une variable une annee entiere
//puis affiche si cette annee est bisextile ou pas

$annee=rand(1999,2020);
    if ($annee %400==0){
        echo"$annee est une annee bisextile";
    }else{
        echo"$annnee n'est pas une annee bisextile";
    }
  ?>  