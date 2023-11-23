<?php

require_once('views/CView.php');
require_once('controllers/CController.php');

$view = new CView();
$controller = new CController();

$pageHeader = $view->GetHeader();
$pageData = $view->ViewMainPage();

include($pageHeader);
include($view->GetFooter());
