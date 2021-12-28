<?php
require_once('constants.php');
require('router.php');

include(VIEW_LAYOUTS_DIR . 'header.php');
loadPage();
include(VIEW_LAYOUTS_DIR . 'footer.php');
