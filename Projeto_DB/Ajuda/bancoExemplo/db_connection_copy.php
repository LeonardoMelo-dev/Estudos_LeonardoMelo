<?php

  $servername = "127.0.0.1";
  $username = "root";
  $password = "";
  $dbname = "leomodel";

  # Criar conexão

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("<p>Conexão falhou: " . $conn->connect_error . "</p>");
  } else {
    $conn->set_charset("utf8mb4");
  }
?>
