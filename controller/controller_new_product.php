<?php 
	class controller_new_product extends controller{
		public function __construct(){
			parent::__construct();
			//lay 8 san pham moi nhat
			$arr = $this->model->fetch("select * from tbl_product order by pk_product_id desc limit 0,8");
			include "view/view_new_product.php";
		}
	}
	new controller_new_product();
 ?>