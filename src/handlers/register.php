<?php
include 'core/connection.php';

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $passwordConf = $_POST['passwordConf'];

    $user_check_query = "SELECT * FROM users WHERE username='$username' LIMIT 1";
    $result = mysqli_query($conn, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if (($user['username'] != $username) && ($password == $passwordConf)) {
        $query = "INSERT INTO users (username, password) 
        VALUES('$username', '$password')";
        mysqli_query($conn, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
    } else {
        echo 'Something went wrong';
    }
}
