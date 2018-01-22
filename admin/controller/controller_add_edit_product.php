<?php 
	class controller_add_edit_product extends controller{
		public function __construct(){
			parent::__construct();
			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch($act){
				case "edit":
					$id = isset($_GET["id"])?$_GET["id"]:0;
					$form_action="index.php?controller=add_edit_product&act=do_edit&id=$id";
					//lay ban ghi co id truyen vao
					$arr = $this->model->fetch_one("select * from tbl_product where pk_product_id=$id");
					//load view
					include "view/view_add_edit_product.php";
					break;
				case "do_edit":
					$id = isset($_GET["id"])?$_GET["id"]:0;
					$c_name = $_POST["c_name"];
					$c_description = $_POST["c_description"];
					$c_content = $_POST["c_content"];
					$c_hotproduct = isset($_POST["c_hotproduct"])?1:0;
					$fk_category_product_id = $_POST["fk_category_product_id"];
					//update ban ghi co id truyen vao
					$this->model->execute("update tbl_product set c_name='$c_name',c_description='$c_description',c_content='$c_content',c_hotproduct=$c_hotproduct,fk_category_product_id=$fk_category_product_id where pk_product_id=$id");					
					//update image
					$c_img = "";
					if(isset($_FILES["c_img"]["name"])&&$_FILES["c_img"]["name"]!=""){
						//--------------
						//xoa anh cu neu co ton tai anh
						$arr_old_image = $this->model->fetch_one("select c_img from tbl_product where pk_product_id=$id");
						$old_image = $arr_old_image["c_img"];
						if(file_exists("../public/upload/product/$old_image")){
							unlink("../public/upload/product/$old_image");
						}
						//--------------
						$c_img = time().$_FILES["c_img"]["name"];
						//upload
						move_uploaded_file($_FILES["c_img"]["tmp_name"], "../public/upload/product/$c_img");
						//update db
						$this->model->execute("update tbl_product set c_img='$c_img' where pk_product_id=$id");
					}
					header("location:index.php?controller=product");	
					break;
				case "add":
					$form_action="index.php?controller=add_edit_product&act=do_add";
						include "view/view_add_edit_product.php";
					break;
				case "do_add":
					$c_name = $_POST["c_name"];
					$c_description = $_POST["c_description"];
					$c_content = $_POST["c_content"];
					$c_hotproduct = isset($_POST["c_hotproduct"])?1:0;
					$fk_category_product_id = $_POST["fk_category_product_id"];
					//update image
					$c_img = "";
					if(isset($_FILES["c_img"]["name"])){
						$c_img = time().$_FILES["c_img"]["name"];
						//upload
						move_uploaded_file($_FILES["c_img"]["tmp_name"], "../public/upload/product/$c_img");
					}
					$this->model->execute("insert tbl_product(c_name,c_description,c_content,c_img,c_hotproduct,fk_category_product_id) values('$c_name','$c_description','$c_content','$c_img',$c_hotproduct,$fk_category_product_id)");
					header("location:index.php?controller=product");
					break;
			}
		}
	}
	new controller_add_edit_product();
 ?>