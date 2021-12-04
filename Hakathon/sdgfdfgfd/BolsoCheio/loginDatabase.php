<?php
  require("connection.php");

  $email = $_POST['email'];
  $password = $_POST['password'];

  $sql = "select * from users where email = '".$email."' and password = '".$password."'";
  $result = $conn->query($sql);
  if($result-> num_rows > 0)
  {
	$name = $result->fetch_assoc();

    $_SESSION['nome_usuario'] = $name ['firstName'];
	header("location: ./index.php");
  }
  else
  {
	header("location: ./page_login/login.php");
  }


  # Redirecionar para página de exibição

  
?>