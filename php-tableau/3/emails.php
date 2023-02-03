<?php
    
$emails = [
    "pierre" => "pierre.dubois@free.fr",
    "martin" => "martin.pecheur@gmail.com",
    "didier" => "didier.claudet@laposte.net"
    ] ;

foreach ($emails as $prenom => $email) {
    echo "$prenom à pour adresse email $email" ;
    echo PHP_EOL ;
}

$nomDeDomaine = readline("saisir un nom de domaine : ") ;

$noms = [] ;
foreach ($emails as $prenom => $email) {
    if (str_contains($email, $nomDeDomaine) == true ) { /* str_contains sert a renvoyer un booléens */
        $noms [] = $prenom ;
        //array_push($noms[],$noms) ;
    }
}

echo "il y a ". count($noms) . " utilisateurs possèdant le domaine $nomDeDomaine" ;
echo PHP_EOL ;

foreach ($noms as $nom) {
    echo $nom ;
    echo PHP_EOL ;
}





