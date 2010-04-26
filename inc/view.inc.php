<?php 
require "class/Locale.class.php";
function get404(){
	$locale  = new Locale(404,$_SESSION['locale']);
	echo $locale->msg;
}
function get200($template){
	include "template/$template.tmpt.php";
	include "template/header.tmpt.php";
	include "template/footer.tmpt.php";
	$locale  = new Locale(200,$_SESSION['locale']);
	$_SESSION['loc_msg'] = $locale->msg;
	echo $header;
	echo $view;
	echo $footer;
}
?>