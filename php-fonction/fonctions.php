<?php

// ce fichier va contenir toutes les fonctions définies dans /projets


// fonction qui affiche les elements du tableau

function afficherTableau(array $tab) : void {
    foreach ($tab as $nombre) {
        echo $nombre . ' ' ;
    }
    echo PHP_EOL ;
}

// Fonction qui prend un tableau en parametre et qui retourne un tableau en resultat

function rechercherNombresPairs(array $tableau) : array {
    $resultat = [] ; // variable locale
    foreach ($tableau as $nombre) {
        if ($nombre % 2 == 0) {
            // on ajoute le nombre dans le tableau resultat
            $resultat[] = $nombre ;
        }
    }
    return $resultat ;
}

// Fonction qui multiplie par 2 les éléments du tableau

function modifiertableau(array& $tableau) : void {
    foreach ($tableau as $index => $nombre) {
        $tableau[$index] = $nombre * 2 ;
    }
}

// fonction qui affiche "Bonjour !"

function direBonjour()  : void {
    global $prenom ;
    echo "Bonjour $prenom" ;
    echo PHP_EOL ;
}

// Fonction paramétré quiaffiche "Bonjour prenom !"

function direBonjourPrenom(string $prenom) : void {
    echo "Bonjour $prenom !" ;
    echo PHP_EOL ;
}

// Fonction qui additionne 2 nombres

function additionner(int $nb1, int $nb2) : int {
    // variable local
    // $resultat = $nb1 + $nb2 ;
    // return $resultat ;

    return $nb1 + $nb2 ;
}

