<?php
require("../db_connection.php");

$book_name = $_POST["book_name"];
$discription = $_POST["discription"];
$price = $_POST["price"];
$quant_in_stock = $_POST["quant_in_stock"];


$sql = "INSERT INTO Books (book_name,discription,price,quant_in_stock)
        VALUES ('$book_name','$discription','$price','$quant_in_stock');";

$conn->query($sql);

# Redirecionar para página de exibição
header('Location:bookList.php');
