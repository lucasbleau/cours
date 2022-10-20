<?php 

$age = readline("Saisir son age : ") ;
$sexe = readline("Saisir son sexe : ") ;
$estHommeDePlusDe22Ans = $sexe == "homme" && $age > "22" ;
$estFemmeEntre20Et30Ans = $sexe == "femme" && $age >= "20" && $age <= "30" ;

if ($estHommeDePlusDe22Ans || $estFemmeEntre20Et30Ans) {
    echo "Vous payez la surprime" ;
} else {
    echo "Vous ne payez pas de surprime" ;
}






