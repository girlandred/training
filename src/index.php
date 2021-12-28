<?php
require_once('core/constants.php');
require('core/connection.php');
require('core/router.php');

include(VIEW_LAYOUTS_DIR . 'header.php');
loadPage();
include(VIEW_LAYOUTS_DIR . 'footer.php');
