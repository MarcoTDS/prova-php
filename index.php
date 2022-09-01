<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h3>Cadastro de produtos</h3>
    <form id="form1" name="form1" method="post" action="cadastro.php">
        <p>
            <label for="tipo">Tipo do produto:</label>
            <input type="text" name="tipo" id="tipo">
        </p>
        <p>
            <label for="nome">Nome do produto:</label>
            <input type="text" name="nome" id="nome">
        </p>
        <p>
            <label for="codigo">Código de barras do produto:</label>
            <input type="text" name="codigo" id="codigo">
        </p>
        <p>
            <input type="submit" name="cadastrar" id="cadastrar" value="Cadastrar">
        </p>
    </form>
</body>
</html>