<?php
  session_start();
  include_once("conexao.php");

  if((isset($_POST['email'])) && (isset($_POST['senha']))){
    $email_user = mysqli_real_escape_string($conn, $_POST['email']);
    $senha_user = mysqli_real_escape_string($conn, $_POST['senha']);
    $senha_user = MD5($senha_user);
    
    $sql = "SELECT * FROM users WHERE email = '$email_user' && senha='$senha_user' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $resultado = mysqli_fetch_assoc($result);

    if(empty($resultado)){
      $_SESSION['loginErro'] = "Usuario ou senha inválido";
      header("Location: index.php");
    }elseif(isset($resultado)){
      
      $_SESSION['usuarioId'] = $resultado['id'];
      $_SESSION['usuarioNome'] = $resultado['usuario'];
      $_SESSION['usuarioEmail'] = $resultado['email'];
      $_SESSION['usuarioSenha'] = $resultado['senha'];
      $_SESSION['usuarioAdmin'] = $resultado['admin'];
      header("Location: deuCerto.php");
    }else{
      $_SESSION['loginErro'] = "Usuario ou senha inválido";
      header("Location: index.php");
    }

  }else{
    $_SESSION['loginErro'] = "Usuario ou senha invalido";
    header("Location: index.php");
  };
?>