<?php
require( __DIR__ . '/core/constants.php');
require(CORE . '/router.php');

include(VIEW_LAYOUTS_DIR . 'header.php');
loadPage();
include(VIEW_LAYOUTS_DIR . 'footer.php');
