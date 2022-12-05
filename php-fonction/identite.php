<?php

function retournerIdentité(string $prenom, string $nom) : string {
    return ucfirst(strtolower($prenom)) . ' ' . strtoupper($nom) ;
}

$prenom = readline("Saisir un prenom : ") ;
$nom = readline("Saisir un nom : ") ;

echo "votre identité est " . retournerIdentité($prenom,$nom) ;