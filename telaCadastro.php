<?php
  session_start();
  $_SESSION['msg']="Usuário cadastrado com sucesso"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div>
    <h1>Faça seu Cadastro</h1>
      <form method="POST" action="cadastro.php">
        <label for="senha">Email</label>
        <input required placeholder="Email" name="email-cadastro" type="email">
        <br>
        <br>
        <label for="usuario">Usuario</label>
        <input required placeholder="Usuario" name="usuario-cadastro" type="text">
        <br>
        <br>
        <label for="senha">Senha</label>
        <input required placeholder="Senha" name="senha-cadastro" type="password">
        <input type="submit" value="Cadastrar">
        <p>Já tem cadastro? <a href="index.php"><strong>faça seu login</strong></a></p>
      </form>
    </div>
</body>
</html>