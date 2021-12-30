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
} else {
    $sql = "UPDATE products set id='" . $id . "', title='" . $_POST['title'] . "', vendor='" . $_POST['vendor'] . "', country='" . $_POST['country'] . "', quantity ='" . $_POST['quantity'] . "' WHERE id='" . $id . "'";
}
$res = mysqli_query($conn, $sql);
if ($res) {
    echo json_encode($res);
} else {
    echo "Error: " . $sql . "" . mysqli_error($conn);
}
