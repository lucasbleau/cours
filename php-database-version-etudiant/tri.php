<?php

$tableau = [
    ['nom' => 'pierre', 'age' => 45],
    ['nom' => 'jean', 'age' => 60],
    ['nom' => 'anne', 'age' => 51],
    ['nom' => 'pauline', 'age' => 43]
] ;

//----------------------------------------------------------
//Exemple 1 : tri croissant (ascendant) en fonction de l'age
//----------------------------------------------------------

//1. Récupérer dans un tableau les valeurs du champs sur lequel est effectué le tri

$ages = array_column($tableau, "age") ;

//2. Executer le tri

array_multisort($ages, SORT_ASC,SORT_NUMERIC, $tableau) ; //tableau mofifié non dupliqué
print_r($tableau) ;

//-------------------------------------------------------------
//Exemple 2 : tri decroissant (descendant) en focntion de l'age
//-------------------------------------------------------------

$tableau = [
    ['nom' => 'pierre', 'age' => 45],
    ['nom' => 'jean', 'age' => 60],
    ['nom' => 'anne', 'age' => 51],
    ['nom' => 'pauline', 'age' => 43]
] ;

//1. Récupérer dans un tableau les valeurs du champs sur lequel est effectué le tri

$ages = array_column($tableau, "age") ;

//2. Executer le tri

array_multisort($ages, SORT_DESC,SORT_NUMERIC, $tableau) ; //tableau mofifié non dupliqué
print_r($tableau) ;

//---------------------------------------------------------------------
//Exemple 3 : tri alphabetique (sensible à la casse) en focntion du nom
//---------------------------------------------------------------------

$tableau = [
    ['nom' => 'pierre', 'age' => 45],
    ['nom' => 'Jean', 'age' => 60],
    ['nom' => 'anne', 'age' => 51],
    ['nom' => 'Pauline', 'age' => 43]
] ;

//1. Récupérer dans un tableau les valeurs du champs sur lequel est effectué le tri

$noms = array_column($tableau, 'nom') ;

//2. Executer le tri

array_multisort($noms, SORT_ASC,SORT_STRING, $tableau) ; //tableau mofifié non dupliqué
print_r($tableau) ;


//-----------------------------------------------------------------------
//Exemple 4 : tri alphabetique (insensible à la casse) en focntion du nom
//-----------------------------------------------------------------------

$tableau = [
    ['nom' => 'pierre', 'age' => 45],
    ['nom' => 'Jean', 'age' => 60],
    ['nom' => 'anne', 'age' => 51],
    ['nom' => 'Pauline', 'age' => 43]
] ;

//1. Récupérer dans un tableau les valeurs du champs sur lequel est effectué le tri

$noms = array_column($tableau, 'nom') ;

//2. Executer le tri

array_multisort($noms, SORT_ASC,SORT_STRING | SORT_FLAG_CASE, $tableau) ; //tableau mofifié non dupliqué
print_r($tableau) ;
