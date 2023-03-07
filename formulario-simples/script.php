<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php

  $name = $_POST["name-input"];
  $text = $_POST["text-input"];

  //  if (isset($_POST['send'])) {
  //  header("Location:confirmacao.html");
  //  }
  ?>

  <h2>
    Olá,
    <?php
    echo $name;
    ?>! O texto digitado foi:
  </h2>
  <p>
    <?php
    echo $text;
    ?>
  </p>

  <button><a href="confirmacao.html">Confirmar e Enviar</a>
</button>

</body>

</html>