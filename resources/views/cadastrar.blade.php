<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos - Cadastro</title>
    <link rel="stylesheet" href="../css/app.css">
</head>
<body>
    <div>
        <h1>Produtos</h1>
        <form action="/cadastrar-produto" method="POST">
            @csrf
            <label for="labelNome">Nome:</label>
            <input type="text" name="nome">
            <br>
            <label for="labelValor">Valor:</label>
            <input type="text" name="valor">
            <br>
            <label for="labelQtd">Estoque:</label>
            <input type="text" name="estoque">
            <br>
            <button>Cadastrar</button>
        </form>
    </div>
</body>
</html>