<?php

$coefA = readline("Entrer un coeficient a : ") ;
$coefB = readline("Entrer un coeficient b : ") ;
$coefC = readline("Entrer un coeficient c : ") ;

$equation = "$coefA/x*2+$coefB/x+$coefC/= 0" ;
$delta =  $coefB ** 2 - 4 * $coefA * $coefC ;

if ($delta > 0) {
    $x1 = ( - $coefB - sqrt($delta) ) / (2 * $coefA) ;
    $x2 = ( - $coefB + sqrt($delta) ) / (2 * $coefA) ;
    echo "Il y a 2 solutions distinct :" ;
    echo"   x1 = $x1" ;  
    echo"   x2 = $x2" ;
} elseif ($delta < 0) {
    $resultat = "L'equation n'a pas de resultat dans R" ;
    echo $resultat ;
} else {
    $resultat = - $coefB/2*$coefA ;
    echo "Il y a une solution : " ;
    echo $resultat ;
}