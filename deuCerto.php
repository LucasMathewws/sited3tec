<?php
  session_start();

  if($_SESSION['usuarioId'] != null){
    if($_SESSION['usuarioAdmin']){
      header("Location: adminpage.php");
    }
    echo "<br>id: ". $_SESSION['usuarioId'];
    echo "<br>Usuario: ". $_SESSION['usuarioNome'];
    echo "<br>email: ". $_SESSION['usuarioEmail'];
    echo "<br>senha: ". $_SESSION['usuarioSenha'];
    echo "<br>admin: ". $_SESSION['usuarioAdmin'];
  }else{
    $_SESSION['loginErro'] = "Usuario ou senha inválido";
    header("Location: index.php");
  }

?>
<br>
<a href="sair.php"><button>Sair</button></a>