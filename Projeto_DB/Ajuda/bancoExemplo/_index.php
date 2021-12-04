<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="estilo.css">

  <title>Nome do Projeto</title>
</head>

<body>
  <?php
  require "db_connection_copy.php";

  $sql = "SELECT *
          FROM employees
          ORDER BY FirstName, LastName;";

  $varEmployees = $conn->query($sql);
  ?>

  <h1>Funcionarios</h1>


  <table>
    <tr>
      <th>Nome</th>
      <th>Sobrenome</th>
      <Th>Cidade</Th>
      <th></th>
      <th></th>
    </tr>



    <?php
    if ($varEmployees->num_rows > 0) {
      while ($employees = $varEmployees->fetch_assoc()) {
    ?>
        <tr>
          <td>
            <?php echo $employees["FirstName"]; ?>
          </td>
          <td>
            <?php echo $employees["LastName"]; ?>
          </td>
          <td>
            <?php echo $employees["City"]; ?>
          </td>
          <td>
            <div class="editarImg">
              <a href="formularioEdicao.php?EmployeeID=<?php echo $employees['EmployeeID']; ?>"><img src="images/Editar.com.png" alt="Editar"></a>
            </div>
          </td>
          <td>
            <div class="removerImg">
              <a href="deletarFuncionario.php?EmployeeID=<?php echo $employees['EmployeeID']; ?>"><img src="images/lixo.png" alt="Remover"></a>
            </div>
          </td>

        </tr>

    <?php
      }
    }
    ?>
  </table>

  <br>
  <div class=add>
    <a href="novoFuncionario.php">Adicionar Novo funcionário <img src="./images/adicionar.png" alt="Adicionar"></a>
  </div>
</body>

</html>