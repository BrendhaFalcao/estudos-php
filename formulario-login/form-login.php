<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Página de Login</title>
</head>

<body>

  <h1>Login do usuário</h1>

  <?php

  if (isset($_GET["erro"])) {
    echo "<h2>" . $_GET["erro"] . "</h2";
  }
  ?>

  <form action="login.php" method="post">

    <label for="login">Login:</label>
    <input type="text" name="login" id="login">
    <br>
    <br>
    <label for="senha">Senha:</label>
    <input type="password" name="senha" id="senha">
    <br>
    <br>
    <input type="submit" value="Enviar">


  </form>

</body>

</html>