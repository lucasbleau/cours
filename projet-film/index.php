<?php
include_once "./donnees/films.php";
include_once "fonctions.php";

$films = rechercherFilms($filmsTable) ;

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
          integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="style.css">
    <title>Liste des films</title>
</head>
<body>
<h1>Page d'acceuil</h1>
    <div class = "card">
            <img class="card-image" src=images/<?php echo $filmsTable[0]['affiche']?> alt="image">

        <div class="card-titre-film">
            <?php echo $filmsTable[0]['titre']?>
        </div>
        <div class="card-année">
            <i class="fa-solid fa-calendar-days"></i><?php echo $filmsTable[0]['annee']?>
        </div>
        <div class = "card-duree">
            <i class="fa-regular fa-clock"></i><?php echo convertirDuree($filmsTable[0]['duree'])?>
        </div>
        <br>
        <div class = "card-realisateur">
            <span class = "gras">Par </span></i><?php echo $filmsTable[0]['realisateur']?>
        </div>
    </div>


</body>
</html>