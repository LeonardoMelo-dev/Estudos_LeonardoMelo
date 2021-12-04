<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>
  <?php
  require "../db_connection.php";

  $sql = "SELECT * FROM Users;";

  $varBooks = $conn->query($sql);

  ?>


  <a href="../Adm/admSpace.php"><button type="button" class="btn btn-dark">Voltar</button></a>

  <h1>Clientes</h1>


  <table class="table">
    <thead style="background-color: black;">
      <tr>
        <th style="color: white">Número</th>
        <th style="color: white">Nome</th>
        <th style="color: white">Sobrenome</th>
        <Th style="color: white">E-mail</Th>
        <th style="color: white">Cpf</th>
        <th style="color: white">Nível</th>
      </tr>
    </thead>



    <?php
    $i = 1;
    if ($varBooks->num_rows > 0) {
      while ($Books = $varBooks->fetch_assoc()) {

    ?>
        <tbody>
          <tr>
            <td>
              <?php echo $Books["user_id"]; ?>
            </td>
            <td scope="row">
              <?php echo $Books["first_name_"]; ?>
            </td>
            <td scope="row">
              <?php echo $Books["last_name_"]; ?>
            </td>
            <td scope="row">
              <?php echo $Books["email_"]; ?>
            </td>
            <td scope="row">
              <?php echo $Books["cpf"]; ?>
            </td>
            <td>
              <?php
              require "../db_connection.php";

              $sql = "SELECT first_name_, User_Level(SUM(price)) AS Level_Cliente FROM PurchaseHistori WHERE user_id = $i;";

              $res = mysqli_query($conn, $sql);
              $row = mysqli_fetch_assoc($res);
              print_r($row['Level_Cliente']);
              echo "<br>";
              ?>
            </td>
          </tr>
        </tbody>
    <?php
        $i++;
      }
    }
    ?>
  </table>



  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>