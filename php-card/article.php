<?php

$articles = [
    ['libelle' => "Image d'un tableau",
        'image' => "https://loremflickr.com/cache/resized/65535_52277820252_f14ea827e5_320_240_g.jpg",
        'prix' => 49.99,
        'promo' => true,
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
        Aenean gravida tristique sem sit amet tempor. 
        Interdum et malesuada fames ac ante ipsum primis in faucibus. 
        Fusce a tortor fermentum, aliquam elit porta, ullamcorper elit. 
        Cras nulla augue, viverra nec iaculis a, euismod ac arcu. 
        Fusce sed suscipit turpis, et pharetra enim. 
        In tincidunt venenatis pretium. Donec semper lobortis arcu non pulvinar. 
        Donec suscipit fermentum orci faucibus porttitor. 
        Ut eget sapien malesuada, accumsan leo in, faucibus lorem. Donec quis sapien dui.'
    ]];

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
          integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="article.css">
    <title>Carte</title>
</head>
<body>
<div class="card">
    <div class="card-header">
        <img class="card-img" src= <?php echo $articles[0]['image']?> alt="image">
    </div>
    <div class="card-body">
        <h2 class="card-title"><?php echo $articles[0]['libelle']?></h2>
        <p class="card-price">
            <?php
            if ($articles[0]['promo'] == "true") {
                echo $articles[0]['prix'];
                echo ' <i class="fa-solid fa-tag"></i>';
            } else {
                echo $articles[0]['prix'];
            }
            ?>
        </p>
        <p class="card-text">
            <?php
            if (strlen($articles[0]['description']) > 100) {
                echo substr($articles[0]['description'], 0, 100)."..." ;
            } else {
                echo $articles[0]['description'];
            }
            ?>
        </p>
        <div class="card-btn-detail">
            <a href="#">Voir</a>
        </div>
    </div>
</div>
</body>
</html>