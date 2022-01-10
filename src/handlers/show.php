<?php
include 'core/connection.php';

$user_id = $_SESSION['id'];

$sql = "SELECT * FROM products where user_id = $user_id";
$result = mysqli_query($conn, $sql);

if (isset($_POST['type']) && $_POST['type'] === 'delete') {
    $id = $_POST['id'];
    $sql = "DELETE FROM products WHERE id= '" . $id . "' AND user_id ='" . $_SESSION['id'] . "'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        echo json_encode($res);
    } else {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }
}
//  else {
//     $sql = "SELECT * FROM products";
//     $result = mysqli_query($conn, $sql);
// }
