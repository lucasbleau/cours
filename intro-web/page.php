<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<h1>Exemple de page !</h1>
<pre>
    <?php

//        var_dump($_SERVER) ;

    if ( $_SERVER["REQUEST_METHOD"] == "GET") {
        echo "la méthode est en GET" ;
    } else {
        echo "la méthode n'est pas en GET" ;
    }

    ?>

    <?php

        $timestamp = $_SERVER['REQUEST_TIME'] ;
        $date = date('d/m/Y H:i:s',$timestamp) ;
        echo "la requête à été émise le $date"

    ?>
</pre>
</body>
</html>