<?php 
	//start session
	session_start();
	//load file config
	include "config.php";
	//load file model
	include "application/model.php";
	//load file controller
	include "application/controller.php";	
	//--------
	$c = isset($_GET["controller"])?$_GET["controller"]:"";
	$controller = "controller/controller_home.php";
	if($c != "")
		//lay duong dan thuc cua file controller. vd: controller/controller_logout.php neu bien url controller = logout
		$controller = "controller/controller_$c.php";
	//--------
	include "view/view_layout.php";
 ?>