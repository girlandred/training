<?php
if (isset($_POST['logout'])) {
    session_start();

    unset($_SESSION['id']);
    unset($_SESSION['username']);
    session_destroy();
    echo '<meta http-equiv="refresh" content="0; URL=/home">';
}
