<!DOCTYPE html>
<html>

<head>
  <title>Adicionar Novo Funcionario</title>
</head>

<body>
  <h1>Novo Funcionário</h1>

  <form action="guardarFuncionario.php" method="POST">

    <label for="FirstName">Primeiro Nome</label><br>
    <input type="text" id="FirstName" name="FirstName"><br>

    <label for="LastName">Sobrenome</label><br>
    <input type="text" id="LastName" name="LastName"><br>

    <label for="City">Cidade</label><br>
    <input type="text" id="City" name="City"><br>

    <label for="Notes">Notas</label><br>
    <input type="text" id="Notes" name="Notes"><br>

    <input type="submit" value="Salvar">
  </form>

  <br>
  <a href="index.php">Voltar</a>
</body>

</html>