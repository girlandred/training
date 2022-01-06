<?php
session_start();

require(__DIR__ . '/core/constants.php');
require(CORE . '/router.php');

include(VIEW_LAYOUTS_DIR . 'header.php');
getRoute();
include(VIEW_LAYOUTS_DIR . 'footer.php');
