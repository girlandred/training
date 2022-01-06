<?php
include 'core/connection.php';

$errors = array();

function validateUser($user)
{
    $errors = array();

    if (empty($user['username'])) {
        array_push($errors, 'Username is required');
    }

    if (empty($user['password'])) {
        array_push($errors, 'Password is required');
    }

    if ($user['passwordConf'] !== $user['password']) {
        array_push($errors, 'Password do not match');
    }

    return $errors;
}

if (isset($_POST['register'])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $passwordConf = $_POST["passwordConf"];
    $errors = validateUser($_POST);
    $sql = "SELECT * FROM users WHERE (username='$username');";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) > 0) {
        var_dump('Error');
    } else {
        if (count($errors) === 0) {
            $hashed_pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $sql = "INSERT INTO users(username, password) VALUES ('$username', '$hashed_pass')";
            $result = mysqli_query($conn, $sql);
            unset($_POST['register'], $_POST['passwordConf']);
            echo '<meta http-equiv="refresh" content="0; URL=/login">';
        } else {
            var_dump('Error');
        }
    }
}
