<?php

define('NOPREVIEW_DIR', basename(dirname(__FILE__)));

LeftAndMain::require_javascript(NOPREVIEW_DIR . '/javascript/NoPreview.LeftAndMain.Preview.js');
LeftAndMain::require_css(NOPREVIEW_DIR . '/css/nopreview.css');