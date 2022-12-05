<?php

//dupliquer = ctrl + d

//bouger la ligne selectionné = ctrl + shift + fleche

// tableau représantant la grille
$grille = [] ;

//constante = "variable" initialiser à sa déclaration et qui ne peut plus être modifié par la suite
const POSITION_VIDE = "-" ;
$barre = " | " ;
const POSITION_HERO = "H" ;

//Dimension de la grille
$largeur = readline("saisir une largeur pour la grille : ") ;
$hauteur = readline("saisir une hauteur pour la grille : ") ;


//Initialisation de la grille
for ($i = 0 ; $i < $hauteur ; $i++ ) {
    for ($u = 0 ; $u < $largeur ; $u++) {
        $grille [$i][$u] = POSITION_VIDE ;
    }
}

//Positionnement du hero aléatoirement
$heroLigne = mt_rand(0 , $hauteur - 1) ;
$heroColonne = mt_rand(0 , $largeur - 1) ;
$grille [$heroLigne][$heroColonne] = POSITION_HERO ;

//Constante pour les couleurs
const BLEU = "\033[34m";
CONST JAUNE = "\033[33m";
const RESET = "\033[0m";

// Achichage de la grille avec foreach
echo str_repeat(" " , 5) ;
for ($i =0 ; $i < $largeur ; $i++ ) {
    echo BLEU.sprintf("%02d  " , $i ).RESET ;
}
echo PHP_EOL ;

foreach ($grille as $numero => $ligne) {
    echo BLEU.sprintf("%02d" , $numero ).RESET ;
    foreach ($ligne as $position) {
        if ($position == POSITION_HERO) {
            echo " | ".BLEU.$position.RESET ;
        } else {
            echo " | " . JAUNE . $position . RESET;
        }
    }
    echo " |" ;
    echo PHP_EOL ;
}

/*Affichage de la grille avec boucle for

echo str_repeat(" " , 5) ;
for ($i =0 ; $i < $largeur ; $i++ ) {
    echo BLEU.sprintf("%02d  " , $i ).RESET ;
}
echo PHP_EOL ;

for ($i = 0 ; $i < $hauteur ; $i++ ) {
    echo BLEU.sprintf( '%02d' , $i).RESET ;
    echo $barre ;
    for ($u = 0 ; $u < $largeur ; $u++) {
        echo JAUNE.$grille [$i][$u].RESET ;
        echo $barre ;
    }
    echo PHP_EOL ;
}

*/
