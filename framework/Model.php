<?php
require "model/ModelRouter.php";
require "model/ModelHtml.php";
require "model/ModelDb.php";
require "model/ModelPhpMailer.php";
require "../app/config/Config.php";

if(isset($_GET["r"])){
    $rute = $_GET["r"];
    $route = explode("/", $rute);

    $controller = $route[0];
    $action = $route[1];

    $class_controller = ucfirst($controller)."Controller";

    require "../app/controllers/$class_controller.php";

    $obj = new $class_controller;

    call_user_func(array($obj, $action));
}