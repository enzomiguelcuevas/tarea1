<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: /enzo/');
  }
  //require 'database.php';

  //if (!empty($_POST['email']) && !empty($_POST['password'])) {
  //  $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
  //  $records->bindParam(':email', $_POST['email']);
  //  $records->execute();
  //  $results = $records->fetch(PDO::FETCH_ASSOC);

  //  $message = '';
      //count($results) > 0 && password_verify($_POST['password'], $results['password'])
    if (!empty($_POST['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: home.php");
    } else {
      $message = 'Lo siento, estas credenciales no coinciden';
    }
  //}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ingresar</title>
   

    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    <?php require 'header.php' ?>

    <center>
        
      <?php if(!empty($message)): ?>
        <p> <?= $message ?></p>
      <?php endif; ?>

        <h1>Ingresar</h1>
      <span>o <a href="signup.php">Registrarse</a></span>

      <form action="login.php" method="POST">
        <input name="email" type="text" placeholder="ingrese email">
        <input name="password" type="password" placeholder="ingrese la contraseña">
        <input type="submit" value="enviar">
      </form>

    </center>
    <footer>
      <?php 
        include_once 'footer.php';
      ?>
    </footer>

  </body>

</html>