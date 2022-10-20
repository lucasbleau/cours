<?php

$notes = [] ;
$note = readline("Saisir une note (q pour arreter) : ") ;
$noteSup10 = [] ;

while ($note != "q") {
    if ($note >= 0 && $note <= 20) {
        $notes[] = $note ;
    } else {
        echo "La note est incorrecte !" ;
        echo PHP_EOL ;
    }
    $note = readline("Saisir une note (q pour arreter) : ") ;
}

$nombreNotes = count($notes) ;
echo "Le nombre de notes saisies est ".$nombreNotes ;
echo PHP_EOL ;

echo "Les notes saisies sont " ;

foreach ($notes as $note) {
    echo $note." " ;
}

foreach ($notes as $note) {
    if ($note >= 10) {
        $noteSup10[] = $note ;
    }
}

echo PHP_EOL ;

if (count($noteSup10) > 0) {
    $moyenne = array_sum($noteSup10) / count($noteSup10) ;
    echo "la moyenne des notes supérieurs à 10 est égale à $moyenne" ;
} else {
    echo "Il n'y a pas de notes supérieur" ;
}
