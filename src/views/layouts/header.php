<?php
include HENDLERS . '/login.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="assets/css/custom.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Training</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav me-auto mb-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=<?= (empty($_SESSION)) ? '/login' : '/create'; ?>>Create</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=<?= (empty($_SESSION)) ? '/login' : '/show'; ?>>Show</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php if (isset($_SESSION['username'])) echo $_SESSION['username'] ?>
                        </a>
                        <ul class="dropdown-menu  dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href=<?= (empty($_SESSION)) ? '/login' : '/create'; ?>>Add Product</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" name="<?= (empty($_SESSION)) ? 'login' : 'logout';  ?>" href=<?= (empty($_SESSION)) ? '/login' : '/logout'; ?>><?= (empty($_SESSION)) ? 'Login' : 'Logout'; ?></a></li>

                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>