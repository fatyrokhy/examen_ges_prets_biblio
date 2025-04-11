<?php
session_start();
require_once("../config/database.php");
define('PAGE','http://faty.niass.ecole221.sn:8000/?');
if (isset($_REQUEST["controller"])) {
    $controller=$_REQUEST["controller"];
    if ($controller=="loginController") {
        require_once("../app/controller/loginController.php");
    } else if ($controller=="ouvrageController") {
        require_once("../app/controller/ouvrageController.php");
    }  else if ($controller=="dashboardController") {
        require_once("../app/controller/dashboardController.php");
    }
} else {
    require_once("../app/controller/loginController.php");
}