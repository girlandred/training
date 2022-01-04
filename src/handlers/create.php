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
        echo 'Success';
    } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
    }
    // header("Location: /show.php");
} elseif (isset($_POST["edit"])) {
    $title = $_POST['title'];
    $vendor = $_POST['vendor'];
    $country = $_POST['country'];
    $quantity = $_POST['quantity'];
    $sql = "UPDATE products SET title='$title', vendor='$vendor', country='" . $country . "', quantity ='$quantity' WHERE id='$id'";
    if (mysqli_query($conn, $sql)) {
        var_dump($_POST);
    } else {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
}
