<?php
	class controller_cart extends controller{
		public function __construct(){
			parent::__construct();
			//khởi tạo giỏ hàng
			if(!isset($_SESSION['cart'])) $_SESSION['cart'] = array();
			//=================
			$act = isset($_GET["act"])?$_GET["act"]:"";
			switch($act){
				case "add":
					$pk_product_id = isset($_GET["id"])?$_GET["id"]:0;
					$this->cart_add($pk_product_id);
					//di chuyen tro lai trang gio hang
					//header("location:index.php?controller=cart");
					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=cart'>";
					break;
				case "delete":
					$pk_product_id = isset($_GET["id"])?$_GET["id"]:0;
					$this->cart_delete($pk_product_id);
					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=cart'>";
					break;
				case "destroy":
					$this->cart_destroy();
					echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=cart'>";
					break;
				case "do_bill":
					if($_SERVER["REQUEST_METHOD"] == "POST"){

						$hovaten = $_POST["hovaten"];
						$diachi = $_POST["diachi"];
						$dienthoai = $_POST["dienthoai"];
						$ghichu = $_POST["ghichu"];
						//luu thong tin vao bang khach hang tbl_customer
						$this->model->execute("insert into tbl_customer(hovaten,diachi,dienthoai,ghichu) values('$hovaten','$diachi','$dienthoai','$ghichu')");
						//lay id customer vua moi insert vao
						$arr_customer_id = $this->model->get_insert_id("customer_id","tbl_customer");
						$customer_id = $arr_customer_id["customer_id"];
						//insert thong tin vao bang hoa don: tbl_order
						$gia = $this->cart_total();
						$this->model->execute("insert into tbl_order(customer_id,ngaymua,gia) values($customer_id,now(),$gia)");
						//lay id order vua moi insert vao
						$arr_order_id = $this->model->get_insert_id("order_id","tbl_order");
						$order_id = $arr_order_id["order_id"]; 
						//insert thong tin vao bang chi tiet hoa don: tbl_order_detail
						foreach($_SESSION["cart"] as $cart){
							$fk_product_id = $cart["pk_product_id"];
							$c_number = $cart["number"];
							$this->model->execute("insert into tbl_order_detail(order_id,fk_product_id,c_number) values($order_id,$fk_product_id,$c_number)");	
						}
						//xoa toan bo gio hang
						$this->cart_destroy();
						echo "<meta http-equiv='refresh' content='0; URL=index.php?controller=cart'>";
					}
					break;
			}				
			//load view
			include "view/view_cart.php";
			//=================
		}

		public function cart_add($pk_product_id){
		    if(isset($_SESSION['cart'][$pk_product_id])){
		        //nếu đã có sp trong giỏ hàng thì số lượng lên 1
		        $_SESSION['cart'][$pk_product_id]['number']++;
		    } else {
		        //lấy thông tin sản phẩm từ CSDL và lưu vào giỏ hàng
		        //$product = get_a_record($pk_product_id);
		        $product = $this->model->fetch_one("select * from tbl_product where pk_product_id=$pk_product_id");
		        
		        $_SESSION['cart'][$pk_product_id] = array(
		            'pk_product_id' => $pk_product_id,
		            'c_name' => $product['c_name'],
		            'c_img' => $product['c_img'],
		            'number' => 1,
		            'c_price' => $product['c_price']
		        );
		    }
		}
		/**
		 * Cập nhật số lượng sản phẩm
		 * @param int
		 * @param int
		 */
		public function cart_update($pk_product_id, $number){
		    if($number==0){
		        //xóa sp ra khỏi giỏ hàng
		        unset($_SESSION['cart'][$pk_product_id]);
		    } else {
		        $_SESSION['cart'][$pk_product_id]['number'] = $number;
		    }
		}
		/**
		 * Xóa sản phẩm ra khỏi giỏ hàng
		 * @param int
		 */
		public function cart_delete($pk_product_id){
		    unset($_SESSION['cart'][$pk_product_id]);
		}
		/**
		 * Tổng giá trị giỏ hàng
		 */
		public function cart_total(){
		    $total = 0;
		    foreach($_SESSION['cart'] as $product){
		        $total += $product['c_price'] * $product['number'];
		    }
		    return $total;
		}
		/**
		 * Số sản phẩm có trong giỏ hàng
		 */
		public function cart_number(){
		    $number = 0;
		    foreach($_SESSION['cart'] as $product){
		        $number += $product['number'];
		    }
		    return $number;
		}
		/**
		 * Danh sách sản phẩm trong giỏ hàng
		 */
		public function cart_list(){
		    return $_SESSION['cart'];
		}
		/**
		 * Xóa giỏ hàng
		 */
		public function cart_destroy(){
		    $_SESSION['cart'] = array();
		}

	}
	new controller_cart();
?>