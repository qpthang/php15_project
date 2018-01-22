<?php 
	class controller_news extends controller{
		public function __construct(){
			parent::__construct();
			
			//phan trang
			//so ban ghi tren mot trang
			$record_per_page = 15;
			//tinh tong so ban ghi
			$total = $this->model->count("select * from tbl_news");
			//tinh so trang = tong so ban ghi / so ban ghi tren 1 trang (lam tron so bang cang su dung ham ceil())
			$num_page = ceil($total/$record_per_page);
			//lay trang hien tai bang cach bat tham so p tu url
			$page = isset($_GET["p"])&&$_GET["p"]>0?$_GET["p"]-1:0;
			//xac dinh lay tu ban ghi nao den bao ghi nao trong truy van csdl
			$from = $page*$record_per_page;
			//-----------
			//lay danh sach cac ban ghi cua table tbl_news
			$arr = $this->model->fetch("select * from tbl_news order by pk_news_id desc limit $from,$record_per_page");
			//load view
			include "view/view_news.php";
		}
	}
	new controller_news();
 ?>