<?php

session_start();

$erro = "";

if (!isset($_POST["login"]) or ($_POST["login"] == "")) {
  $erro = "Preencha o login";
} elseif (!isset($_POST["senha"]) or ($_POST["senha"] == "")) {
  $erro = "Preencha a senha";
} else {
  $login = $_POST["login"];
  $senha = $_POST["senha"];

  if ($login != "admin" or $senha != "1234") {
    $erro = "Login ou senha invalido(s)";
  } else {
    $_SESSION["usuario"] = "Administrador";
  }
}

if ($erro != "") {
  header("Location: form-login.php?erro=$erro");
} else {
  header("Location: protegida.php");
}
