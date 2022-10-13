<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Minha página</title>
  
</head>
<body>
  <div>
    <h1>Faça seu login</h1>
    <form method="POST" action="validar.php">
      <label for="">Email</label>
      <input required placeholder="Email" name="email" type="email">
      <br>
      <br>
      <label for="">Senha</label>
      <input required placeholder="Senha" name="senha" type="password">
      <input type="submit" value="Logar">
      <p>não tem cadastro? <a href="telaCadastro.php"><strong>cadastre-se</strong></a></p>
    </form>
    <p>
      <?php
        if(isset($_SESSION['loginErro'])){
          echo $_SESSION['loginErro'];
          unset($_SESSION['loginErro']);
        };
      ?>
    </p>
  </div>
</body>
</html>