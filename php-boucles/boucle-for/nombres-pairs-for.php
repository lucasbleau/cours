<?php

$nombreMax = readline("saisir un nombre : ") ;

for ($nombre = 0;$nombre <= $nombreMax;$nombre++) {
    if ($nombre % 2 == 0) {
        echo $nombre.' ';
    } 
}