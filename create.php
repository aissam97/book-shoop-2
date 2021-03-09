<?php include 'hedear.php'; ?>
<?php include 'add.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
*{ 
    margin: 0%;
    padding: 0%;
}
body{
    background-color: #F2F2F2;
    color: transparent;
}
    </style>
</head>
<body>
 <header>
    <div class="titleg">
        <p>new books :</p>
</div>
<?php if (!empty($errors)): ?>
    <div style="background-color: grey;">
        <?php foreach ($errors as $error): ?>
            <div><?php echo $error; ?></div>
        <?php endforeach;
        ?>
    </div>
    
<?php endif; ?>
    <form action="add.php"  method = "POST" enctype="multipart/form-data">
    <div  class="form">
       <span>title</span><br>
         <input type="text" name = "titre"> <br> <br>
           <span>Author</span><br>
              <input type="text"  name = "auteur"> <br> <br>
              <span>image </span>
           <div class="">
         <input type="file"  name = "images"  style="width:300px;"> <br> <br>
         <span>prix </span>
           <div class="">
         <input type="text"  name = "prix" style="/width:200px;">
    </div> <br>
  <span> quatité au stock</span>  <br>
<input type="text"  name = "quantite" > <br> <br>
  <span>date d'achat</span>  <br>
      <input type="date" id="start" name="date_achat" style="/width:200px;" 
         value="2021-04-04"
            min="2021-02-04" max="2025-2-4"> <br> <br>
         <div>
    <span>Date du publication</span><br> 
<input type="date"  class="form-control"  value="2021-02-04"
min="2021-02-04" max="2025-2-4" id="date" name="date_de_publication" required></div> <br> <br>
    <div><button  id="btn1" type ="submit"  name = "submit" >Add</button ></div></div>
    </form>
</body>
<?php include 'footer.php';
?>
</html>