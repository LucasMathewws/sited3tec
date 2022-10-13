<?php
  session_start();

  session_destroy();

  unset(
    $_SESSION['usuarioId'],
    $_SESSION['usuarioNome'],
    $_SESSION['usuarioEmail'],
    $_SESSION['usuarioSenha']
  );

  header("Location: index.php");
?>

