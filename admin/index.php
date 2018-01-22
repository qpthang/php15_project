<?php 
	//start session
	session_start();
	//load file config
	include "../config.php";
	//load file model
	include "../application/model.php";
	//load file controller
	include "../application/controller.php";
	//kiem tra, neu khong ton tai $_SESSION["c_username"] (chua dang nhap) thi yeu cau phai dang nhap, neu da dang nhap thi co the su dung cac chuc nang trong admin
	if(isset($_SESSION["c_username"]) == false)
		include "controller/controller_login.php";
	else{
		//--------
		$c = isset($_GET["controller"])?$_GET["controller"]:"";
		$controller = "";
		if($c != "")
			//lay duong dan thuc cua file controller. vd: controller/controller_logout.php neu bien url controller = logout
			$controller = "controller/controller_$c.php";
		//--------
		include "view/view_layout.php";
	}
 ?>