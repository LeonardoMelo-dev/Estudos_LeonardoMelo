<!DOCTYPE html>
<html>

<head>
  <title>Adicionar um livro</title>
</head>

<body>
  <h1>Registar Livro</h1>

  <form action="./storeBooks.php" method="POST">

    <label for="book_name">Nome do Livro</label><br>
    <input type="text" id="book_name" name="book_name"><br>

    <label for="discription">Descrição</label><br>
    <input type="text" id="discription" name="discription"><br>

    <label for="price">Valor</label><br>
    <input type="text" id="price" name="price"><br>

    <label for="quant_in_stock">Qauntidade</label><br>
    <input type="text" id="quant_in_stock" name="quant_in_stock"><br>

    <input type="submit" value="Salvar">
  </form>

  <br>
  <a href="../main/index.html">Voltar</a>
</body>

</html>