<?php
require("db_connection_copy.php");

$FirstName = $_POST["FirstName"];
$LastName = $_POST["LastName"];
$City = $_POST["City"];
$Notes = $_POST["Notes"];

$EmployeeID = $_GET["EmployeeID"];

$sql = "UPDATE employees 
          SET FirstName = '$FirstName',
              LastName = '$LastName',
              City= '$City', 
              Notes = '$Notes'
          WHERE EmployeeID = '$EmployeeID';";

$conn->query($sql);

# Redirecionar para página de exibição
header('Location:index.php');
