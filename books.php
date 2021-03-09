

<?php
include 'hedear.php';
require_once 'searching.php';
?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>

<body>
    <div class="cont">  
<p>OUR BOOKS:</p> </div>
<div class="row">

   !--<div class="column">
    echo "<div class="card">
       <h1>".$row['titre'].'</h1>
      <p>'  .$row['auteur'].'</p>
      <p>'.$row['images'].'</p>
      <p>'.$row['prix'].'</p>
      <p>'.$row['quantite'].'</p>
      <p>'.$row['date_achat'].'</p>
      <p>'.$row['date_de_publication'].'</p>
    echo "<div class='entry'>
        <h1>".$row['titre'].'</h1>
      <p>'  .$row['auteur'].'</p>
      <p>'.$row['images'].'</p>
      <p>'.$row['prix'].'</p>
      <p>'.$row['quantite'].'</p>
      <p>'.$row['date_achat'].'</p>
      <p>'.$row['date_de_publication'].'</p>
      </div>';
    </div>
    <span>BOOK 1</span>
  </div>

  <div class="column">
    <div class="card">
      
    </div>
    <span>BOOK 2</span>
     
  </div>
  
  <div class="column">
    <div class="card">
       
     
    </div>
    <span>BOOK 3</span>
  </div>
  

</body>
</html>