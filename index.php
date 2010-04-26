<?php 
session_start();
include "inc/config.inc.php";
include "inc/controller.inc.php";
include "inc/model.inc.php";
include "inc/view.inc.php";
ini_set("display_errors", 1);
error_reporting(E_ALL);
index();
?>
