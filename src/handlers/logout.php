<?php
unset($_SESSION['id_user']);
unset($_SESSION['username']);
session_destroy();
echo '<meta http-equiv="refresh" content="0; URL=/home">';
