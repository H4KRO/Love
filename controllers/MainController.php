<?php
class MainController{
  public static function main(){
    $view = 'main.php';
    require_once('views/views.php');
  }
  public static function subscribe(){
    $view = 'main/subscribe.php';
    require_once('views/views.php');
  }
  public static function connect(){
    $view = "main/connect.php";
    require_once('views/views.php');
  }
}
 ?>
