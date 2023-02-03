<?php
    include_once "films.php";
    include_once "fonctions.php";

    $id = null ;
    $erreur = null ;

if (!empty($_GET['id'])) {
    $id = $_GET['id'] ;
} else {
    $erreur = "L'URL n'est pas valide !" ;
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="detail.css">
    <title>Détails film</title>
</head>
<body>
    <?php
        if (isset($erreur)) { ?>
            <div class = "erreur">
                <h2>ERREUR</h2>
                <p><?= $erreur ?></p>
            </div>
        <?php } else {
            $idFilm = rechercherFilmParID($filmsTable, $id) ; ?>
            <h1><?= $idFilm['titre']," (".$idFilm['annee'].") "?></h1>
            <img src="./images/<?= $idFilm['affiche'] ?>" alt="affiche">
            <p><b>Durée du film :</b> <?= convertirDuree($idFilm['duree'])?></p>
            <p><b>Réalisateur :</b> <?= $idFilm['realisateur']?></p>
            <p><b>Synopsis :</b> <?= $idFilm['synopsis']?></p>
            <p><b>Acteurs principaux :</b> <?= $idFilm['acteurs']?></p>

        <?php } ?>
</body>
</html>
