<?php
include 'core/connection.php';


if (isset($_POST["create"])) {
    $title = $_POST['title'];
    $vendor = $_POST['vendor'];
    $country = $_POST['country'];
    $quantity = $_POST['quantity'];
    $user_id = $_SESSION['id_user'];
    $sql = "INSERT INTO products(title, vendor, country, quantity, user_id) 
    VALUES ('$title', '$vendor', '$country', '$quantity', '$user_id')";
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
} elseif ($id) {
    $querry = "SELECT * FROM products WHERE id='$id' LIMIT 1";
    $result = mysqli_query($conn, $querry);
    $row = $result->fetch_assoc();
}
