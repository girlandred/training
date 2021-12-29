<?php
include 'core/connection.php';
require 'handlers/show.php';

if (isset($_POST['delete'])) {

    $id = $_POST['id'];
    $sql = "DELETE FROM products WHERE id= '" . $id . "'";
    $res = mysqli_query($conn, $sql);
    if ($res) {
        echo json_encode($res);
    } else {
        echo "Error: " . $sql . "" . mysqli_error($dbCon);
    }
}
