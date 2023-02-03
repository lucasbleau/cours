<!doctype html>
<html lang="fr">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
          integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Tableaux</title>

</head>
<body>
<h1>Les Tableaux</h1>
<div>
    <a href="index.php">Retour au sommaire</a>
</div>
<h2>Affichage simple d'un tableau</h2>
<?php
    $noms = ['Dupond','Durand','Martin','Blaio'] ;

    foreach ($noms as $nom) {
        echo "<p>yooooooooo, Je m'appelle $nom</p>" ;
    }
?>
<?php
$noms = ['groot','grout','groote','Blaio'] ;

foreach ($noms as $nom) { ?>
    <p>Je s'appelle <?= $nom ?></p>
<?php } ?>

<h2>Affichage d'un tableau sous la forme d'une liste HMTL</h2>
<?php
    $noms = ['groot','grout','groote','Blaio'] ;
?>

<ul>
    <?php
        foreach ($noms as $nom) { ?>
            <li><?= $nom ?></li>
    <?php } ?>
</ul>

<h2>Affichage d'un tableau sous la forme d'une table HTML</h2>
<?php
$comptes = [
        ['prenom'=>'Jean','nom'=>'Dupond','email'=>'jdupond@exemple.fr','premium'=>true],
        ['prenom'=>'Pierre','nom'=>'Durand','email'=>'pdurand@exemple.fr','premium'=>false],
        ['prenom'=>'Anne','nom'=>'Martin','email'=>'amartin@exemple.fr','premium'=>true],
        ['prenom'=>'Pauline','nom'=>'Sapin','email'=>'psapin@exemple.fr','premium'=>false],
]
?>

<table>
    <tr>
        <th>Prenom</th>
        <th>Nom</th>
        <th>Email</th>
        <th>Premium</th>
        <th>Actions</th>
    </tr>
    <?php
    foreach ($comptes as $compte) { ?>
        <tr>
            <td><?php echo $compte['prenom']?></td>
            <td><?php echo $compte['nom']?></td>
            <td><?php echo $compte['email']?></td>
            <td><?php echo $compte['premium']? 'oui' : 'non' ?></td>
            <td><?php echo "<a href = '' class = 'boutton'>supprimer</a><a href = '' class = 'boutton'> modifier" ?>

                <?php
                if ($compte['premium']) {
                     echo "<a href = '' class = 'prem'>premium</a>" ; ?>
                <?php }
                ?>

            </td>
        </tr>
    <?php } ?>
</table>




</body>
</html>