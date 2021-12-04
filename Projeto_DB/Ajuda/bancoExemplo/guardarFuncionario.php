<?php
require("db_connection_copy.php");

$FirstName = $_POST["FirstName"];
$LastName = $_POST["LastName"];
$City = $_POST["City"];
$Notes = $_POST["Notes"];


$sql = "INSERT INTO employees (FirstName,LastName,City,Notes)
            VALUES ('$FirstName','$LastName','$City','$Notes');";

$conn->query($sql);

# Redirecionar para página de exibição
header('Location:index.php');
