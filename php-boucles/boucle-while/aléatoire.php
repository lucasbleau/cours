<?php 

$nombre = readline("Saisir un nombre entre 0 et 1000 : ") ;


while (($nombre < 0) || ($nombre > 1000)) {
    echo "Le nombre à deviner doit être compris entre 0 et 1000" ;
    echo PHP_EOL ;
    $nombre = readline("Saisir un nombre entre 0 et 1000 : ") ;
}

$nombreCoups = 0 ;
$nombreAleatoire = random_int(0,1000) ;

while ($nombre <> $nombreAleatoire) {
    if ($nombreCoups > 200) {
        break ;
    } 
    $nombreAleatoire = random_int(0,1000) ;
    $nombreCoups += 1 ;

}


if ($nombreCoups <= 200) {
    echo "Le nombre à deviner à été trouver en $nombreCoups coups" ;
} else {
    echo "Le nombre doit être deviner en moins de 200 coups" ;
}