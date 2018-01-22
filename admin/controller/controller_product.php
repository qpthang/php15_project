<?php 
	class controller_product extends controller{
		public function __construct(){
			parent::__construct();
			//-----------
			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch($act){
				case "delete":
					$id = isset($_GET["id"])?$_GET["id"]:0;
					$this->model->execute("delete from tbl_product where pk_product_id=$id");
					header("location:index.php?controller=product");
					break;
			}
			//-----------
			//phan trang
			//so ban ghi tren mot trang
			$record_per_page = 15;
			//tinh tong so ban ghi
			$total = $this->model->count("select * from tbl_product");
			//tinh so trang = tong so ban ghi / so ban ghi tren 1 trang (lam tron so bang cang su dung ham ceil())
			$num_page = ceil($total/$record_per_page);
			//lay trang hien tai bang cach bat tham so p tu url
			$page = isset($_GET["p"])&&$_GET["p"]>0?$_GET["p"]-1:0;
			//xac dinh lay tu ban ghi nao den bao ghi nao trong truy van csdl
			$from = $page*$record_per_page;
			//-----------
			//lay danh sach cac ban ghi cua table tbl_product
			$arr = $this->model->fetch("select * from tbl_product order by pk_product_id desc limit $from,$record_per_page");
			//load view
			include "view/view_product.php";
		}
	}
	new controller_product();
 ?>