<?php
include 'core/connection.php';

if (isset($_POST['type']) && $_POST['type'] === 'delete') {
    $id = $_POST['id'];
    $sql = "DELETE FROM products WHERE id= '$id'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        echo json_encode($res);
    } else {
        echo 'Error: ' . $sql . '' . mysqli_error($conn);
    }
} else {
    $user_id = $_SESSION['id_user'];
    $limit = 5;
    if (isset($_GET["page"])) {
        $page  = $_GET["page"];
    } else {
        $page = 1;
    };
    $start_from = ($page - 1) * $limit;
    $sql = "SELECT * FROM products WHERE user_id='$user_id' LIMIT $start_from, $limit";
    $result = mysqli_query($conn, $sql);
}
