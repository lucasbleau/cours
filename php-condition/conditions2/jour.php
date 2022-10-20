<?php

$date = date("d/m/Y") ;

echo "Aujourd'hui nous sommes le $date" ;
echo PHP_EOL ;

if (date("d") == "samedi") {
    echo "Je vous souhaite un bon week-end !" ;
} elseif (date("d") == "dimanche") {
    echo "Je vous souhaite un bon dimanche !" ;
} else {
    echo "Je vous souhaite une bonne journée !" ;
}


