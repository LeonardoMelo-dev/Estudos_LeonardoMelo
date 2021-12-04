<?php
require "../db_connection.php";

$user_id = $_POST["user_id"];


$sql = "SELECT first_name_, User_Level(SUM(price)) AS Level_Cliente FROM PurchaseHistori WHERE user_id = $user_id;";
