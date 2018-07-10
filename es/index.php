<?php 

require_once  '../dictionary/urls.php';
require_once '../core/bo/Log.php';


$str_url = $_SERVER['REQUEST_URI'];
$metod = str_replace(ROOT, '', $str_url);
$metod = str_replace(HOME, '', $metod);
$metod = str_replace('/', '', $metod);

echo $metod;
//handler($metod);

?>