<?php


  $servername = "localhost";
  $username = "root";
  $password = "1234";
  $dbname = "bolsocheiodb";

  # Connect to database

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("<p>Conexão falhou: " . $conn->connect_error . "</p>");
  } else {
    $conn->set_charset("utf8mb4");
  }
  
?>