<?php
$nombre = 0 ;
$nombreMax = readline("Saisir un nombre limite : ") ;

while ($nombre <= $nombreMax) {
    if ($nombre % 2 == 0) {
        echo $nombre.' ';
    }    
    $nombre += 1 ;
}