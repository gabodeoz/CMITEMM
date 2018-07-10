<?php 
require_once '../dictionary/urls.php';
require_once '../dictionary/views.php';
require_once '../core/bo/Log.php';
require_once '../core/bo/HtmlBo.php';
require 'control.php';

$str_url = $_SERVER['REQUEST_URI'];
$metod = str_replace(ROOT, '', $str_url);
$metod = str_replace(HOME, '', $metod);
$metod = str_replace('/', '', $metod);
handler($metod);

?>