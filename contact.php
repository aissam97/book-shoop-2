<?php
$to = 'farjiaissam97.com';
$subject = 'hello';
$message = 'hello';
$headers = 'From: webmaster@example.com'."\r\n".
    'Reply-To: webmaster@example.com'."\r\n".
    'X-Mailer: PHP/'.phpversion();

mail($to, $subject, $message, $headers);
?> 

  <?php include 'hedear.php'; ?>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="style/style.css">
  <title>Library</title>
  </head>
  <body>
  <!--start of form to add books-->
    <div class=" main-container"> 
    <div class="container">
    <form class="form-inline mb-3">
    <div class="ilinetext">
    <h5 class="title">CONTACT US :</h5>
    </div>
              </form>
   <form action="" method="POST">
    <div class="form-row">
    <div class="form-group col-md-6">
    <label for="inputEmail4" class="testStart">NAME</label>
    <input type="text" class="form-control" id="NameContact" name="name" placeholder="Name" required>
    </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4" class="testStart">EMAIL</label>
      <input type="email" class="form-control" id="EmailContact" name="email"placeholder="Email" required>
    </div>
    </div>
    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4 " class="testStart">MESSAGE</label>
      <textarea class="form-control" id="MessageContact" name="message" style=" resize :none;" rows="10"placeholder="Message" ></textarea required>
    </div>
  </div>
  <button type="submit" name="send" class="bntStyle" style="padding: 7px 23px; background-color: blue; color:white;   "   >SEND</button>
</form>
 
        <?php include 'footer.php'; ?>
       
