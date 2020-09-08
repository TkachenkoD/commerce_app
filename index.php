<?php
//front controller

session_start();

define("ROOT",dirname(__FILE__));
// define("ROOT",__DIR__);
require_once(ROOT."/components/Router.php");
require_once(ROOT."/components/Db.php");

// print_r(ROOT);
$router = new Router();
$router->run();