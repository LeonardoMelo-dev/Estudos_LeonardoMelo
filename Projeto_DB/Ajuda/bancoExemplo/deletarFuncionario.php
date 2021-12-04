<?php
require("db_connection_copy.php");

$EmployeeID = $_GET["EmployeeID"];

$sql = "DELETE FROM employees
          WHERE EmployeeID = $EmployeeID;";

$conn->query($sql);

header("Location:index.php");
