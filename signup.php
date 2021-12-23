<?php

  require 'database.php';

  $message = '';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
   $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
      $message = 'Nuevo usuario creado con éxito';
    } else {
      $message = 'Lo sentimos, debe haber habido un problema al crear su cuenta';
    }
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Registrarse</title>
   
 
    <link rel="stylesheet" href="assets/css/style.css">

  </head>
  <body>

    <?php require 'header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Registrarse</h1>
    <span>o <a href="login.php">Ingresar</a></span>

    <form action="signup.php" method="POST">
      <input name="email" type="text" placeholder="ingrese email">
      <input name="password" type="password" placeholder="ingrese la contraseña">
      <input name="confirm_password" type="password" placeholder="confirmar contraseña">
      <input type="submit" value="enviar">
    </form>

  </body>
</html>