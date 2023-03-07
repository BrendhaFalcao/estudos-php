<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Index</title>
</head>

<body>
  <!-- Esse código não ta funcionando direito, pq quando vc tenta fazer o login
e dá erro, depois você não consegue fazer o login mesmo digitando login e senha corretos -->

  <h1>Pequeno teste com login</h1>
  <h2><a href="protegida.php">Protegida</a></h2>

  <?php

  // inicia o ambiente de sessão para pegar as variáveis na sessão do servidor
  // em sessões o servidor guarda valores de uma dada conexão
  //o session_start() não inicia uma sessão, ele inicia o recurso de sessão
  session_start();

  // se eu tenho um usuário na sessão mostra o link de "logout"
  if (isset($_SESSION["usuario"])) {

  ?>

    <a href="logout.php">Logout</a>

  <?php
  }

  ?>

</body>

</html>