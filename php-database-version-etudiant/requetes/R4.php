<?php

require "../base-de-donnees/tableArticle.php";
require "../base-de-donnees/tableAuteur.php";
require "../base-de-donnees/tableCategorie.php";
require_once "requetes.php";

/*
 * Test requête R4
*/
$dateCreationD = readline("Saisir une date (dd-mm-yyyy) : ");

$resultat = recupererArticlesSup($tableArticles, $tableAuteurs, $dateCreationD) ;
print_r($resultat) ;

