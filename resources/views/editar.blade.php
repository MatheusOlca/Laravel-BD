<!DOCTYPE html>
<html lang="pt">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Produtos - Editar</title>
</head>
<body>
      <h1>Produtos</h1>
      <form action="/editar-produto/{{$produto->id}}" method="POST">
            @csrf
            <label for="labelNome">Nome:</label>
            <input type="text" name="nome" value="{{$produto->nome}}">
            <br>
            <label for="labelValor">Valor:</label>
            <input type="text" name="valor" value="{{$produto->valor}}">
            <br>
            <label for="labelQtd">Estoque:</label>
            <input type="text" name="estoque" value="{{$produto->estoque}}">
            <br>
            <button type="submit">Editar</button>
            <button type="button" onclick="document.location = '/deletar-produto/{{$produto->id}}'">Excluir</button>
      </form>
</body>
</html>