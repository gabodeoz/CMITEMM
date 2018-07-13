<?php 
require_once '../dictionary/paths.php';
require_once '../dictionary/requests.php';
require_once 'bo/Log.php';
require_once 'dao/ConnectionDB.php';
require_once 'daoImpl/Perfil.php';
require_once 'daoImpl/Users.php';
require 'control.php';

$str_url = $_SERVER['REQUEST_URI'];
$view = str_replace(ROOT, '', $str_url);
$view = str_replace(HOME, '', $view);
$view = str_replace('/', '', $view);

print_r($_POST);
$control = new Control();
$control-> handler_request($view,$_POST);

?>