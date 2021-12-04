<?php
require("../db_connection.php");

$fk_user_id = $_POST["fk_user_id"];
$fk_book_id = $_POST["fk_book_id"];


$sql = "INSERT INTO purchase_history_clients (fk_user_id, fk_book_id)
        VALUES ($fk_user_id, $fk_book_id);";

$conn->query($sql);

# Redirecionar para página de exibição
header('Location:index.php');
