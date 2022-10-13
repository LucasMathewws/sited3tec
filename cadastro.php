<?php
  session_start();

  include_once("conexao.php");

  $_SESSION['msg'] = "Usuário cadastrado com sucesso";

  $cad_usuario = $_POST["usuario-cadastro"];
  $cad_senha = MD5($_POST["senha-cadastro"]);
  $cad_email = $_POST["email-cadastro"];

  $result_usuario = "INSERT INTO users(`usuario`, `senha`, `email`, `admin`) VALUES ('$cad_usuario','$cad_senha','$cad_email', 0)";
  $resultado_usuario = mysqli_query($conn, $result_usuario);

  header("Location: index.php");
?>