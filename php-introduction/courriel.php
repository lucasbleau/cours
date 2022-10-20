<?php

$prenom = readline("Saisir votre prénom : ") ;
$nom = readline("Saisir votre nom : ") ;
$N = strlen($nom) ;
$mail = "$prenom.$nom$N@societe.com" ;

echo "votre email est $mail" ;


