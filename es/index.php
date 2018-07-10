<?php 
require_once '../dictionary/urls.php';
require_once '../dictionary/views.php';
require_once '../core/bo/Log.php';
require_once '../core/bo/HtmlBo.php';
require 'control.php';

$str_url = $_SERVER['REQUEST_URI'];
$view = str_replace(ROOT, '', $str_url);
$view = str_replace(HOME, '', $view);
$view = str_replace('/', '', $view);

$control = new Control();
$control-> handler_views($view);


?>