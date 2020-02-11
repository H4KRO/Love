<?php
$controller = "MainController";
$action = "main";

if(isset($_GET['controller']) && isset($_GET['action']) && file_exists($CONTROLLERSPATH . $_GET['controller'] . '.php')){
  require_once($CONTROLLERSPATH . $_GET['controller'] . '.php');
  if(class_exists($_GET['controller']) && method_exists ($_GET['controller'], $_GET['action'])){
    $controller = $_GET['controller'];
    $action = $_GET['action'];
  }
}else{
  require_once($CONTROLLERSPATH . $controller . '.php');
}

$func = $controller . '::' . $action;
$func();

 ?>
