<?php
include('views/layouts/header.php');
require_once('constants.php');
require('router.php');
$view = getRoute();
require($view);
// require(VIEW_LAYOUTS_DIR);
// require($layout);
include('views/layouts/footer.php');
