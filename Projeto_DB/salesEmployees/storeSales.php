<?php
require("../db_connection.php");

$fk_employee_id = $_POST["fk_employee_id"];
$fk_book_id = $_POST["fk_book_id"];
$fk_user_id = $_POST["fk_user_id"];

$sql = "INSERT into Seles_History_Employees (fk_employee_id, fk_book_id, fk_user_id)
        values ($fk_employee_id, $fk_book_id, $fk_user_id);";

$conn->query($sql);

# Redirecionar para página de exibição
header('Location:employeesSales.php');
