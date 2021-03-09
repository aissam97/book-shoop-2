<?php

include 'db.php';

$errors[] = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $titre = $_POST['titre'];
        $auteur = $_POST['auteur'];
        $images = $_FILES['images'];
        $prix = $_POST['prix'];
        $quantite = $_POST['quantite'];
        $date_achat = date('Y-m-d', strtotime($_POST['date_achat']));
        $date_de_publication = date('Y-m-d', strtotime($_POST['date_de_publication']));

        //echo var_dump($date_achat);

        if ($titre == '') {
            $errors[] = 'please include a title';
        }
        if ($auteur == '') {
            $errors[] = 'please include a auteur';
        }
        if ($images == '') {
            $errors[] = 'please include a images';
        }
        echo var_dump($images);
        '<br>';

        if ($prix == '') {
            $errors[] = 'please include a prix';
        }
        if ($quantite == '') {
            $errors[] = 'please include a quantite';
        }
        if ($date_achat == '') {
            $errors[] = 'please include a date achat';
        }
        if ($date_de_publication == '') {
            $errors[] = 'please include a date achat';
        }
        echo var_dump($errors);
         if (empty($errors)) {
        $sql = "INSERT INTO livres (titre, auteur, images, prix, quantite, date_achat, date_de_publication)
       VALUES ($titre, $auteur, $images,$prix, $quantite , $date_achat,$date_de_publication)";
        // use exec() because no results are returned
        // $conn->exec($sql);
        mysqli_query($conn, $sql);}
    }
         //header('location: read.php ');
    //}
