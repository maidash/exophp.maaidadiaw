<?php
    //EXERCICE 3:
    //Initialiser trois variables puis les ranger
    //dans l'ordre décroissant
    $chiffre1=rand(-1,10);
    $chiffre2=rand(-1,10);
    $chiffre3=rand(-1,10);
    if ($chiffre1> $chiffre2> $chiffre3) {
       echo"l'ordre decroissant est $chiffre1, $chiffre2, $chiffre3 "; 
    }
    if ($chiffre1> $chiffre3> $chiffre2) {
        echo"l'ordre decroissant est $chiffre1, $chiffre3,$chiffre2 ";
    }  
    
    if ($chiffre2> $chiffre1> $chiffre3) {
        echo"l'ordre decroissant est $chiffre2, $chiffre1,$chiffre3 ";
    }   
    if ($chiffre2> $chiffre3> $chiffre1) {
        echo"l'ordre decroissant est $chiffre2, $chiffre3,$chiffre1 ";
    }   
    if ($chiffre3> $chiffre2> $chiffre1) {
        echo"l'ordre decroissant est $chiffre3, $chiffre2,$chiffre1 ";
    }   
    if ($chiffre3>= $chiffre1>= $chiffre2) {
        echo"l'ordre decroissant est $chiffre3, $chiffre1,$chiffre2";
    }   


