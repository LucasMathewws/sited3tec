<?php
  session_start();
  include_once("conexao.php");


  if(!$_SESSION['usuarioAdmin']){
    $_SESSION['loginErro'] = "Usuario ou senha inválido";
    header("Location: index.php");
  }

  
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ADMIN</title>
  <link rel="stylesheet" href="./styles/styleadmin.css">
</head>
<body>
  <a href="sair.php"><button>Sair</button></a>
  <div>
    <h1>Turnê</h1>
    <table class="tabela-admin">
      <thead>
        <tr>
            <td><strong>ID</strong></td>
            <td><strong>USUARIO</strong></td>
            <td><strong>EMAIL</strong></td>
            <td><strong>ADMIN</strong></td>
        </tr>

      </thead>
      <tbody>
        <?php
          $allUsers= "SELECT * FROM users";
          $resultado  = mysqli_query($conn, $allUsers);
         
          while($linha = mysqli_fetch_assoc($resultado)){
        ?>
        <form action="" class="">
          <tr>
            <td><?php echo $linha['id'] ?></td>
            <td><?php echo $linha['usuario'] ?></td>
            <td><?php echo $linha['email'] ?></td>
            <td><?php echo $linha['admin'] ?></td>
            <td><button>deletar</button><button>salvar</button></td>
          </tr>
        </form>
        <?php }?>
      </tbody>
    </table>



  </div>




</body>
</html>