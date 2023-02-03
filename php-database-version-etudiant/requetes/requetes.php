<?php

/********************************************************************
 * Ce fichier PHP contient la liste des fonctions permettant de
 * simuler les requêtes dans la base de données
 *******************************************************************/

/* Requête R1
 * Récupérer les articles actifs (articles à afficher)
 * On souhaite récupérer l'id, le titre, le contenu et la date de création de chaque article
*/

function rechercherArticlesActifs(array $tableArticles) : array {
    $resultats = [];
    // parcours de la table
    foreach ($tableArticles as $id => $article) {
        // $article est un tableau associatif
        if ($article["actif"] == true ) {
            // Insérer l'article dans le tableau $resultat
            $resultats[] = [
                "id" => $id,
                "titre" => $article["titre"],
                "contenu" => $article["contenu"],
                "date_creation" => $article["date_creation"]
            ];
        }
    }
    return $resultats;
}

/* Requête R2
 * Récupérer les articles d'une catégorie donnée
 * On souhaite récupérer l'id, le titre, le contenu et la date de création de chaque article
*/
function rechercherArticlesParCategorie(array $tableArticle, int $idCategorie) : array {
    $resultat = [] ;
    foreach ($tableArticle as $id => $article) {
        if ($article["id_categorie"] == $idCategorie) {
            $resultats[] = [
                "id" => $id,
                "titre" => $article["titre"],
                "contenu" => $article["contenu"],
                "date_creation" => $article["date_creation"]
                ] ;
        }
    }
    return $resultats ;
}

/* Requête R3
 * Récupérer l'ensemble des articles
 * On souhaite récupérer l'id, le titre, le contenu, la date de création et le nom de la catégorie de chaque article
*/

//function rechercherToutArticles(array $tableArticle, array $tableCategorie) : array {
//    $resultat = [] ;
//    foreach ($tableArticle as $id => $article) {
//        foreach ($tableCategorie as $idCategorie => $categorie) {
//            if ($article["id_categorie"] == $idCategorie) {
//                $nomCategorie = $categorie["libelle"] ;
//            }
//        }
//            $resultats[] = [
//                "id" => $id,
//                "titre" => $article["titre"],
//                "contenu" => $article["contenu"],
//                "date_creation" => $article["date_creation"],
//                "libelle" => $nomCategorie
//            ] ;
//    }
//    return $resultats ;
//}

function rechercherToutArticles(array $tableArticle, array $tableCategorie) : array {
    $resultats = [];
    foreach ($tableArticle as $id => $article) {
        // jointure avec categorie
        $libCategorie = $tableCategorie[$article["id_categorie"]]["libelle"];
        $resultats[] = [
            "id" => $id,
            "titre" => $article["titre"],
            "contenu" => $article["contenu"],
            "date_creation" => $article["date_creation"],
            "libelle" => $libCategorie
        ];
    }
    return $resultats ;
}

/* Requête R4
 * Récupérer les articles dont la date de création est supérieure à une date donnée
 * On souhaite récupérer l'id, le titre, le contenu, la date de création, le prénom et le nom de l'auteur de
 * chaque article
*/

function recupererArticlesSup(array $tableArticle, array $tableAuteur, string $demande) : array {
    $resultats = [] ;
    foreach ($tableArticle as $id => $article) {
        $prenomAuteur = $tableAuteur[$article["id_auteur"]]["prenom"] ;
        $nomAuteur = $tableAuteur[$article["id_auteur"]]["nom"] ;
        $dateCreationD = strtotime($demande) ;
        $dateCreation = $article["date_creation"] ;
        $dateCreation = strtotime($dateCreation) ;
        if ($dateCreation > $dateCreationD) {
            $resultats[] = [
            "id" => $id,
            "titre" => $article["titre"],
            "contenu" => $article["contenu"],
            "date_creation" => $article["date_creation"],
            "prenom" => $prenomAuteur,
            "nom" => $nomAuteur
            ];
        }
    }
    return $resultats ;
}


/* Requête R5
 * Récupérer les articles à afficher ordonnés sur le titre (ordre alphabétique)
 * On souhaite récupérer l'id, le titre, la date de création et le libellé de la catégorie de chaque article
*/

function recupArtOrd(array $tableArticle, array $tableCategorie) :array {
    $resultats = [] ;
    foreach ($tableArticle as $id => $article) {
        $libCategorie = $tableCategorie[$article["id_categorie"]]["libelle"] ;
        $resultats[] = [
            "id" => $id,
            "titre" => $article["titre"],
            "date_creation" => $article["date_creation"],
            "libelle" => $libCategorie
        ] ;
    }
    $titreOrd = array_column($resultats, 'titre') ;
    array_multisort($titreOrd, SORT_ASC,SORT_STRING | SORT_FLAG_CASE, $resultats) ;
    return $resultats ;
}


/* Requête R6
 * Récupérer le nombre d'articles postés par un auteur donné (id_auteur)
*/

function recupArtAuteur(array $tableArticle, array $tableAuteur, string $auteurId) : int {
    $resultats = [] ;
    $nombreArt = 0 ;
    foreach ($tableArticle as $id => $article) {
        if ($auteurId == $article["id_auteur"]) {
            $nombreArt += 1 ;
            $resultats = $nombreArt ;
        }
    }
    return $resultats ;
}

/* Requête R7
 * Récupérer le nombre d'articles postés par chaque auteur
 * On souhaite récupérer l'id, le prénom, le nom et le nombre d'articles ce chaque auteur
*/

//function recupArtA(array $tableArticle, array $tableAuteur) : array {
//    $resultats = [] ;
//    $nombreArt = 0 ;
//    foreach ($tableArticle as $id => $article) {
//        $nomAuteur = $tableAuteur[$article["id_auteur"]]["nom"] ;
//        $prenomAuteur = $tableAuteur[$article["id_auteur"]]["prenom"] ;
//        if ($ == $resultats["id_auteur"]) {
//            $nombreArt += 1 ;
//        } else {
//            $resultats[] = [
//                "id_auteur" => $article["id_auteur"],
//                "prenom" => $prenomAuteur,
//                "nom_auteur" => $nomAuteur,
//                "nombre_article" => $nombreArt
//            ];
//        }
//    }
//    return $resultats ;
//}

function recupArtA(array $tableArticles, array $tableAuteur) : array {
    $resultats = [] ;
    $nombreArticleParAuteur = array_count_values(array_column($tableArticles, 'id_auteur'));
    foreach ($tableAuteur as $idAuteur => $auteur) {
        $resultats[$idAuteur] = [
            "nom" => $auteur["nom"],
            "prenom" => $auteur["prenom"],
            "nombreArticle" => $nombreArticleParAuteur[$idAuteur]
        ];
    }
    return $resultats ;
}

