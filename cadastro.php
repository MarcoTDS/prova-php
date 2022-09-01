<?php
session_start();

    if(isset($_POST["tipo"]) && isset($_POST["nome"]) && isset($_POST["codigo"])){
        $tipo = $_POST["tipo"];
        $nome = $_POST["nome"];
        $codigo = $_POST["codigo"];
    }
    if(!(empty($tipo) or empty($nome) or empty($codigo))){
        include("conexao.php");
        $sql = "INSERT INTO tb_produtos (tipo_produto, nome_produto, codigo_de_barras) VALUES ('$tipo', '$nome', '$codigo')";
        $res = mysqli_query($conn, $sql);
    }

   $produtos = mysqli_query($conn, "SELECT * FROM tb_produtos");
   echo "<table border='1'>";
    echo "<tr>";
        echo "<th>Tipo do produto</th>";
        echo "<th>Nome do produto</th>";
        echo "<th>Código de barras</th>";
    echo "</tr>";
    while($produto = mysqli_fetch_array($produtos)){
        echo "<tr>";
            echo "<td>".$produto['tipo_produto']."</td>";
            echo "<td>".$produto['nome_produto']."</td>";
            echo "<td>".$produto['codigo_de_barras']."</td>";
        echo "</tr>";
    }
    echo "</table>";
     

      

?>