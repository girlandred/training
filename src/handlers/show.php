<?php
include 'core/connection.php';
$sql_stmt = "SELECT * FROM products";
$result = mysqli_query($conn, $sql_stmt);
