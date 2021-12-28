<?php
include 'core/connection.php';
if (isset($_POST["create"])) {
    $title = $_POST['title'];
    $vendor = $_POST['vendor'];
    $country = $_POST['country'];
    $quantity = $_POST['quantity'];
    $sql = "INSERT INTO products(title, vendor, country, quantity) 
    VALUES ('$title', '$vendor', '$country', '$quantity')";
    if (mysqli_query($conn, $sql)) {
        var_dump($_POST);
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
}
