<?php

// V1 = Version avec boucle

$equipes = ['France','Brésil','Argentine','Espagne','Sénégal','Australie','Belgique'];

$demandeEquipe = readline("Saisir une équipe : ") ;

$trouve = false ;

echo "------------ Verison boucle ------------" ;
echo PHP_EOL ;

foreach($equipes as $equipe) {
    if ($demandeEquipe == $equipe) {
        $trouve = true ;
        break ;
    }
}

if ($trouve == true) {
    echo "$demandeEquipe sera presente à la prochaine coupe du monde !";
} else {
    echo "$demandeEquipe ne sera pas presente à la prochaine coupe du monde !";
}




// Version sans boucle
echo PHP_EOL ;
echo "------------ Verison PHP ------------" ;
echo PHP_EOL ;

if (in_array($demandeEquipe,$equipes)) {
    echo "$demandeEquipe sera presente à la prochaine coupe du monde !";
} else {
    echo "$demandeEquipe ne sera pas presente à la prochaine coupe du monde !";
}