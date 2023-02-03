<?php
    //recup des paramètres d'url
    //$nom = $_GET['nom'] ;

    //tester la presence du paramètre 'nom'
    $nom = null ; //null = indeterminé
    $prenom = null ;
    $erreur = null ;

    if (!empty($_GET['nom']) && !empty($_GET['prenom'])) {
        //le paramètre existe
        $nom = $_GET['nom'] ;
        $prenom = $_GET['prenom'] ;
    } else {
        //le paramètre n'existe pas ou est vide
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
    <title>script 2</title>
</head>
<body>
    <!-- Tester si il y a une erreur -->
    <?php
        if (isset($erreur)) { ?>
    <div class = "erreur">
        <h2>ERREUR</h2>
        <p><?= $erreur ?></p>
    </div>
    <?php } else { ?>
<h1>Script 2</h1>
<p>Ceci est le script 2</p>
<p>je m'appelle <?= "$prenom "."$nom" ?></p>

<?php } ?>
</body>
</html>