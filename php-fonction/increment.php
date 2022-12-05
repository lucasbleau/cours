<?php

// Fonction qui incrémente ( augmente le nombre )
function incrementer(int $nombre) : void {
    $nombre += 1 ;
}

function incrementer2(int& $nombre) : void {
    $nombre += 1 ;
}



// Appel

$compteur = 0 ;
incrementer2($compteur) ;
echo $compteur ;
