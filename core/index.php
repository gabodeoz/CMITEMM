<?php 
header('Access-Control-Allow-Origin: *');
header('Content-type: application/json');
require_once '../dictionary/paths.php';
require_once '../dictionary/requests.php';
require_once 'dao/ConnectionDB.php';
#
foreach (glob("daoImpl/*.php") as $filename){
    include $filename;
}
foreach (glob("bo/*.php") as $filename){
    include $filename;
}
require 'control.php';
#
$str_url = $_SERVER['REQUEST_URI'];
$view = str_replace(ROOT, '', $str_url);
$view = str_replace(CORE, '', $view);
$view = str_replace('/', '', $view);
#
$control = new Control();
$json = $control-> handler_request($view,$_POST);
echo $json;
?>