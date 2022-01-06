<?php
include 'core/connection.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * from users WHERE username = '$username'";
    $res = mysqli_query($conn, $query);
    $numRows = mysqli_num_rows($res);
    if ($numRows  == 1) {
        $row = mysqli_fetch_assoc($res);
        if (password_verify($password, $row['password'])) {
            $_SESSION["id"] = $row['id'];
            $_SESSION['username'] = $row['username'];
            echo '<meta http-equiv="refresh" content="0; URL=/home">';
        } else {
            var_dump('Error');
        }
    } else {
        var_dump('Error');
    }
}
