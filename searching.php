<?php

include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $search_value = $_POST['search'];
    $sql = "SELECT * from livres where titre like '%$search_value%'";
    $res = $conn->query($sql);
    while ($row = $res->fetch_array()) {
        echo 'titre:  '.$row['titre'];
        echo 'auteur:  '.$row['auteur'];
        echo 'images:  '.$row['images'];
        echo 'prix:  '.$row['prix'];
        echo 'quantite:  '.$row['quantite'];
        echo 'date_achat:  '.$row['date_achat'];
        echo 'date_achat:  '.$row['date_de_publication'];

        echo "<div class='entry'>
        <h1>".$row['titre'].'</h1>
      <p>'.$row['auteur'].'</p>
      <p>'.$row['images'].'</p>
      <p>'.$row['prix'].'</p>
      <p>'.$row['quantite'].'</p>
      <p>'.$row['date_achat'].'</p>
      <p>'.$row['date_de_publication'].'</p>
      </div>';
        // header('location: books.php');
    }
}
