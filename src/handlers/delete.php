<?php

if (isset($_POST['delete_product'])) {
    $prod_id = $_POST['id'];
    if (mysqli_query($conn, "Delete from products where id ='$prod_id'")) {
        echo $prod_id;
    } else {
        echo "Error: -" . mysqli_error($conn);
    }
}
