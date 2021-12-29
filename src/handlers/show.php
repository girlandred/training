<?php
include 'core/connection.php';

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);