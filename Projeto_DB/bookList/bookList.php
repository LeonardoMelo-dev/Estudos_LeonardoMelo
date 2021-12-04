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

  $sql = "SELECT *
            FROM Books
            ORDER BY book_name;";

  $varBooks = $conn->query($sql);

  ?>


  <a href="../Adm/admSpace.php"><button type="button" class="btn btn-dark">Voltar</button></a>

  <h1>Livros</h1>


  <table class="table">
    <thead style="background-color: black;">
      <tr>
        <th style="color: white">Número</th>
        <th style="color: white">Livro</th>
        <th style="color: white">Descrição</th>
        <Th style="color: white">Valor</Th>
        <th style="color: white">Quantidade</th>
        <th style="color: white">Total</th>
      </tr>
    </thead>



    <?php
    if ($varBooks->num_rows > 0) {
      while ($Books = $varBooks->fetch_assoc()) {
    ?>
        <tbody>
          <tr>
            <td>
              <?php echo $Books["book_id"]; ?>
            </td>
            <td scope="row">
              <?php echo $Books["book_name"]; ?>
            </td>
            <td scope="row">
              <?php echo $Books["discription"]; ?>
            </td>
            <td scope="row">
              <?php echo $Books["price"]; ?>
            </td>
            <td scope="row">
              <?php echo $Books["quant_in_stock"]; ?>
            </td>

            <td>
              <?php echo $Books["quant_in_stock"] * $Books["price"]; ?>
            </td>
          </tr>
        </tbody>
    <?php
      }
    }
    ?>
  </table>

  <?php
  require "../db_connection.php";

  $sql = "CALL ValorTotalLivros();";

  $res = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($res);
  echo 'valor total livros: ';
  print_r($row['Preco']);
  ?>

  <div class="bookPrice">

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
      Registrar Livro
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Registrar novo livro</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">

            <form action="./storeBooks.php" method="POST">

              <label for="book_name">Nome do Livro</label><br>
              <input type="text" id="book_name" name="book_name"><br>

              <label for="discription">Descrição</label><br>
              <input type="text" id="discription" name="discription"><br>

              <label for="price">Valor</label><br>
              <input type="text" id="price" name="price"><br>

              <label for="quant_in_stock">Qauntidade</label><br>
              <input type="text" id="quant_in_stock" name="quant_in_stock"><br>


              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary">Salvar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>