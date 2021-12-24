<?php
include('views/layouts/header.php');
require('router.php');
$view = getRoute();
require($view);
include('views/layouts/footer.php');
