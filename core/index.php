<?php 
require_once '../dictionary/paths.php';
require_once '../dictionary/requests.php';
require_once '../core/bo/Log.php';
require_once '../core/bo/daoImpl/Perfil.php';
require_once '../core/bo/daoImpl/Users.php';
require 'control.php';

$str_url = $_SERVER['REQUEST_URI'];
$view = str_replace(ROOT, '', $str_url);
$view = str_replace(HOME, '', $view);
$view = str_replace('/', '', $view);

$control = new Control();
$control-> handler_views($view);

?>