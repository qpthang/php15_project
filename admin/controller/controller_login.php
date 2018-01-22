<?php 
	class controller_login extends controller{
		public function __construct(){
			//goi ham __construct cua class controller
			parent::__construct();
			//----------
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$c_username = $_POST["c_username"];
				$c_password = $_POST["c_password"];
				$c_password = md5($c_password);
				$arr = $this->model->fetch_one("select c_username,c_password from tbl_user where c_username='$c_username'");
				if(isset($arr["c_username"])){
					//kiem tra password
					if($arr["c_password"] == $c_password){
						//dang nhap thanh cong
						$_SESSION["c_username"] = $c_username;
					}
				}else{
					echo "not ok";
				}
				header("location:index.php");
			}
			//----------
			//load view
			include "view/view_login.php";
		}
	}
	new controller_login();
 ?>