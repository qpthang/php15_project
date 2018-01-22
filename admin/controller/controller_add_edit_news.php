<?php 
	class controller_add_edit_news extends controller{
		public function __construct(){
			parent::__construct();
			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch($act){
				case "edit":
					$id = isset($_GET["id"])?$_GET["id"]:0;
					$form_action="index.php?controller=add_edit_news&act=do_edit&id=$id";
					//lay ban ghi co id truyen vao
					$arr = $this->model->fetch_one("select * from tbl_news where pk_news_id=$id");
					//load view
					include "view/view_add_edit_news.php";
					break;
				case "do_edit":
					$id = isset($_GET["id"])?$_GET["id"]:0;
					$c_name = $_POST["c_name"];
					$c_description = $_POST["c_description"];
					$c_content = $_POST["c_content"];
					$c_hotnews = isset($_POST["c_hotnews"])?1:0;
					//update ban ghi co id truyen vao
					$this->model->execute("update tbl_news set c_name='$c_name',c_description='$c_description',c_content='$c_content',c_hotnews=$c_hotnews where pk_news_id=$id");
					//update image
					$c_img = "";
					if(isset($_FILES["c_img"]["name"])){
						$c_img = time().$_FILES["c_img"]["name"];
						//upload
						move_uploaded_file($_FILES["c_img"]["tmp_name"], "../public/upload/news/$c_img");
						//update db
						$this->model->execute("update tbl_news set c_img='$c_img' where pk_news_id=$id");
					}
					header("location:index.php?controller=news");	
					break;
				case "add":
					$form_action="index.php?controller=add_edit_news&act=do_add";
						include "view/view_add_edit_news.php";
					break;
				case "do_add":
					$c_name = $_POST["c_name"];
					$c_description = $_POST["c_description"];
					$c_content = $_POST["c_content"];
					$c_hotnews = isset($_POST["c_hotnews"])?1:0;
					//update image
					$c_img = "";
					if(isset($_FILES["c_img"]["name"])){
						$c_img = time().$_FILES["c_img"]["name"];
						//upload
						move_uploaded_file($_FILES["c_img"]["tmp_name"], "../public/upload/news/$c_img");
					}
					$this->model->execute("insert tbl_news(c_name,c_description,c_content,c_img,c_hotnews) values('$c_name','$c_description','$c_content','$c_img',$c_hotnews)");
					header("location:index.php?controller=news");
					break;
			}
		}
	}
	new controller_add_edit_news();
 ?>