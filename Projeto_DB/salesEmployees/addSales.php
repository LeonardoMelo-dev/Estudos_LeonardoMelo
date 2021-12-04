<!DOCTYPE html>
<html>

<head>
  <title>Registrar Venda</title>
</head>

<body>
  <h3>Registrar Venda</h3>

  <form action="storeSales.php" method="POST">

    <label for="email">Email do funcionário</label><br>
    <input type="text" id="email" name="email"><br>

    <label for="book_name">Nome do livro</label><br>
    <input type="text" id="book_name" name="book_name"><br>

    <input type="submit" value="Salvar">
  </form>

  <br>
  <a href="./employeesSales.php">Voltar</a>
</body>

</html>