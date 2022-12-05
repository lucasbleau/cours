<?php

//------------
//  Exemple 1
//------------

//$date1 = "12-11-2022" ;
//$date2 = "22-05-2021" ;
//  comparer les 2 dates

//if($date1 > $date2) {
//    echo "$date1 est > à $date2" ;
//} else {
//    echo "$date2 est < à $date1" ;
//}

//  Le problême = les dates sont des chaines de caractères
//  La comparaison se fait caractère par caractère
//  On ne peut pas utiliser les opérateurs de compraraison (<,>,<=,=>...) pour comparer des dates

// SOLUTIONS
//  On va utiliser des timestamps
//  Un timestamps (pour une date donnée) represente le nombre de secondes écoulées entre cette date et le 1/01/1970
//  Convertir chaque date en timestamp

//echo PHP_EOL ;
//
//if(strtotime($date1) > strtotime($date2)) {
//    echo "$date1 est > à $date2" ;
//} else {
//    echo "$date2 est < à $date1" ;
//}

//------------|
//  Exemple 2 |
//------------|

//$date1 = "12/11/2022" ;
//$date2 = "22/05/2021" ;

//$timestamp1 = strtotime($date1) ;
//echo $timestamp1 ;
//
//$timestamp2 = strtotime($date2) ;
//
//echo PHP_EOL ;
//var_dump($timestamp2) ;

// PROBLEME !
//  le format des 2 date n'est pas interpreté correctement par PHP
//  Il faut utiliser un format de date reconnu et interpretable par PHP

// SOLUTION
//  Il va falloir transformer les dates dans un format correctement interpretable par PHP

//$date1 = str_replace('/','-',$date1) ;
//$date2 = str_replace('/','-',$date2) ;
//
//if(strtotime($date1) > strtotime($date2)) {
//    echo "$date1 est > à $date2" ;
//} else {
//    echo "$date2 est < à $date1" ;
//}

//---------------------------------------------|
//  Exemple 3 : convertion timestamp vers date |
//---------------------------------------------|

//$timestamp = 1668207600 ;
//$date = date('d/m/Y', $timestamp) ;
//echo PHP_EOL ;
//echo $date ;

//-----------------------------------
//  Exemple 4 : formatage d'une date
//-----------------------------------

//$date = '22-05-2021';
//$dateformate = date('d/m/Y', strtotime($date)) ;
//echo $dateformate ;

//  Quelques formats de dates en PHP
$date = '22 may 2021' ;
$dateformate = date('d/m/Y', strtotime($date)) ;
echo $dateformate ;

$date = "2021/05/22" ;
$dateformate = date('d/m/Y', strtotime($date)) ;
echo $dateformate ;

$date = "2021/05/22" ;
$dateformate = date('d/m/Y', strtotime($date)) ;
echo $dateformate ;