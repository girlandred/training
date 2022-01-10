<?php
include 'core/connection.php';


// $sql = "SELECT * FROM products";
// $result = mysqli_query($conn, $sql);

if (isset($_POST['type']) && $_POST['type'] === 'delete') {
    $id = $_POST['id'];
    $sql = "DELETE FROM products WHERE id= '" . $id . "'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        echo json_encode($res);
    } else {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
} else {
    $user_id = $_SESSION['id_user'];
    $sql = "SELECT * FROM products WHERE user_id='$user_id'";
    $result = mysqli_query($conn, $sql);
}
