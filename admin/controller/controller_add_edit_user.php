<?php 
	class controller_add_edit_user extends controller{
		public function __construct(){
			parent::__construct();
			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch($act){
				case "edit":
					$id = isset($_GET["id"])?$_GET["id"]:0;
					//tao bien $form_action de luu action cua form
					$form_action="index.php?controller=add_edit_user&act=do_edit&id=$id";
					//lay ban ghi co id truyen vao tren url
					$arr = $this->model->fetch_one("select * from tbl_user where pk_user_id=$id");
					//load view
					include "view/view_add_edit_user.php";
					break;
				case "do_edit":
					$id = isset($_GET["id"])?$_GET["id"]:0;
					$c_fullname = $_POST["c_fullname"];
					$c_password = $_POST["c_password"];
					$c_fullname = mysql_escape_string($c_fullname);
					//update c_fullname
					$this->model->execute("update tbl_user set c_fullname='$c_fullname' where pk_user_id=$id");	
					//kiem tra neu password co thay doi thi update password
					if($c_password != ""){
						$c_password = md5($c_password);
						//update password
						$this->model->execute("update tbl_user set c_password='$c_password' where pk_user_id=$id");						
					}
					//di chuyen den trang can chi dinh
					header("location:index.php?controller=user");
					break;
				case "add":
					$form_action="index.php?controller=add_edit_user&act=do_add";
					//load view
					include "view/view_add_edit_user.php";
					break;
				case "do_add":
					$c_username = $_POST["c_username"];
					$c_password = $_POST["c_password"];
					$c_fullname = $_POST["c_fullname"];
					$c_password = md5($c_password);
					//kiem tra xem user nay co ton tai khong, neu khong ton tai thi moi cho add user
					$check = $this->model->count("select c_username from tbl_user where c_username='$c_username'");
					if($check > 0)
						header("location:index.php?controller=user&err=1");
					else{
						$this->model->execute("insert into tbl_user(c_username,c_password,c_fullname) values('$c_username','$c_password','$c_fullname')");
						//di chuyen den trang can chi dinh
						header("location:index.php?controller=user");
					}
					break;
			}
		}
	}
	new controller_add_edit_user();
 ?>