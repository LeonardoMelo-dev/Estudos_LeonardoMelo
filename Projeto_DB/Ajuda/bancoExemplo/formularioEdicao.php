<!DOCTYPE html>
<html>

<head>
  <title>Editar Funcionário</title>
</head>

<body>

  <?php
  require 'db_connection_copy.php';
  $EmployeeID = $_GET["EmployeeID"];
  $sql = "SELECT * FROM employees WHERE $EmployeeID = $EmployeeID;";

  $result = $conn->query($sql);
  $employee = $result->fetch_assoc();
  ?>

  <h1>Editar Funcionário</h1>

  <form action="editarFuncionario.php" method="POST">

    <input type="hidden" name="EmployeeID" value="<?php echo ($employee['EmployeeID']); ?>">

    <label for="FirstName">Primeiro Nome</label><br>
    <input type="text" id="" name="FirstName" value="<?php echo ($employee['FirstName']); ?>"><br>

    <label for="LastName">Sobrenome</label><br>
    <input type="text" id="" name="LastName" value="<?php echo ($employee['LastName']); ?>"><br>

    <label for="City">Cidade</label><br>
    <input type="text" id="" name="City" value="<?php echo ($employee['City']); ?>"><br>

    <label for="Notes">Notas</label><br>
    <input type="text" id="" name="Notes" value="<?php echo ($employee['Notes']); ?>"><br>

    <input type="reset" value="Cancelar">
    <input type="submit" value="Salvar">
  </form>

  <br>
  <a href="index.php">Voltar</a>
</body>