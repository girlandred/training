<?php
include 'core/connection.php';

if (isset($_GET['delete'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM products WHERE id= '$id'";
    if (mysqli_query($conn, $sql)) {
        var_dump('record');
    } else {
        echo "Error: -" . mysqli_error($conn);
    }
}
