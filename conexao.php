<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "db_mercearia";

    $conn = mysqli_connect($servidor, $usuario, $senha, $banco) 
    or die("Erro ao conectar ao banco de dados. Erro: ".mysqli_connect_error());

    if(isset($conn)){
        echo "Banco de dados conectado";
    }

?>