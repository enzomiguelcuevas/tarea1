<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>bienvenido a mi app</title>
  

    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <?php include_once 'header.php' ?>

    <div class="row">
      <div class="col">
        
      <center>
        <h1>Por favor Ingrese o Registrese </h1>

        <a href="login.php">Ingrese</a> o
        <a href="signup.php">Registrarse</a>  
      </center>

      </div>
    </div>

    
    <div class="container-footer" style="background-color: green;">
      <?php 
        include_once 'footer.php';
      ?>
    </div>
  </body>
</html>