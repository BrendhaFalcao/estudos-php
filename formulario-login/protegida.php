<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Protegida</title>
</head>

<body>

  <?php

  session_start();
  // se não tiver um usuário na sessão vai pra página de login, se tiver abre a página
  if (!isset($_SESSION["usuario"])) {
    header("Location: form-login.php");
  } else {
  ?>

    <h1>Olá <?php echo ($_SESSION["usuario"]) ?> </h1>
    <h2><a href="index.php">Retornar</a></h2>
  <?php
  }

  ?>

</body>

</html>