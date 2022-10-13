<?php
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "meu_banco";
    
    $conn = mysqli_connect($host, $usuario, $senha, $dbname);
    
    if(!$conn){
        die("Falha na conexao: " .mysqli_connect_error());
    }else{
        //echo "Conexao realizada com sucesso";
    }  
?>