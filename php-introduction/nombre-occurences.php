<?php

$phrase = readline("Saisir une phrase : ") ;
$mot = readline("Saisir un mot : ") ;

$compte = substr_count(strtolower($phrase),$mot) ;

echo "le mot $mot apparait $compte fois dans la phrase" ;
