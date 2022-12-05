<?php

$truc = [
    "P0001" => ["designation"=>"Produit 1","prix"=>50.99,"stock"=>10],
    "P0002" => ["designation"=>"Produit 2","prix"=>99.99,"stock"=>20],
    "P0003" => ["designation"=>"Produit 3","prix"=>25.50,"stock"=>6],
    "P0004" => ["designation"=>"Produit 4","prix"=>130.99,"stock"=>4],

] ;

$prixTotal = 0 ;
$reapprovisionnement = [] ;

foreach ($truc as $reference => $cle) {
    $designation = $cle["designation"] ;
    $prix = $cle["prix"] ;
    $stock = $cle["stock"] ;
    echo "$reference : $designation" ;
    echo PHP_EOL ;
    $prixTotal = $prixTotal + ($prix*$stock) ;
        if ($stock < 7) {
            $reapprovisionnement[] = $reference ;
        }
}
echo "la valeur du stock est de $prixTotal " ;
echo PHP_EOL ;

$demandeReference = readline("saisir une rérérence : ") ;

if (in_array($demandeReference, $reapprovisionnement)) {
    $quantiteRecu = readline( "Saisir une quantité reçu : ") ;
    $cle["stock"] = $cle["stock"] + $quantiteRecu ;
    echo "La quantité a bien été mis à jour !" ;
} else {
    echo "la référence n'existe pas " ;
}



