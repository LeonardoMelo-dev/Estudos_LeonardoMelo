<?php
  require("connection.php");

  $email = $_POST['email'];
  $password = $_POST['password'];
  $firstname = $_POST['firstName'];
  $lastname = $_POST['lastName'];


   $sql = "INSERT INTO users (email, password, firstname, lastname) VALUES ('".$email."', '".$password."','".$firstname."', '".$lastname."')";

   $conn->query($sql);

   header("location: ./page_login/login.php");
  # Redirecionar para página de exibição

  
?>