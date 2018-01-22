<div style="margin-top: 20px; margin-bottom: 20px;">
	<table cellpadding="5" border="1" style="width:100%; border-collapse: collapse;">
		<tr>
			<th style="width:100px;">Ảnh</th>
			<th>Tên sản phẩm</th>
			<th style="width:100px;">Số lượng</th>
			<th style="width: 100px;">Đơn giá</th>
			<th style="width:100px;"></th>
		</tr>
		<?php 
			foreach($_SESSION["cart"] as $product)
			{
		 ?>
		<tr>
			<td style="text-align: center;">
				<img src="public/upload/product/<?php echo $product["c_img"]; ?>" style="width: 100px;">
			</td>
			<td><?php echo $product["c_name"]; ?></td>
			<td style="text-align: center;"><?php echo $product["number"]; ?></td>
			<td style="text-align: center;"><?php echo number_format($product["c_price"]); ?> VNĐ</td>
			<td style="text-align: center;">
				<a href="index.php?controller=cart&act=delete&id=<?php echo $product["pk_product_id"]; ?>">Delete</a>
			</td>
		</tr>
		<?php } ?>
	</table>
	<?php 
		//neu khong co san pham nao trong gio hang thi hien thi thong bao: khong co san pham
		if($this->cart_number() == 0)
		{
	 ?>
	<div style="margin:5px;">Không có sản phẩm nào trong giỏ hàng</div>
	<?php } ?>
	<div style="margin:5px;">
		<ul>
			<li>Số lượng sản phẩm: <?php echo $this->cart_number(); ?> sản phẩm</li>
			<li>Tổng giá trị sản phẩm: <?php echo number_format($this->cart_total()); ?> VND</li>
		</ul>
	</div>
	<style type="text/css">
		.cart_menu ul li{display: inline; padding:10px;}
		.cart_menu ul li a{font-weight: bold;}
	</style>
	<div class="cart_menu">
	<ul>
		<li><a href="index.php">Tiếp tục mua hàng</a></li>
		<li><a href="index.php?controller=cart&act=destroy">Xoá giỏ hàng</a></li>
		<li><a href="index.php?controller=cart&act=bill">Thanh toán</a></li>
	</ul>
	</div>
	<?php 
		if($act == "bill")
		{
	 ?>
	<div style="margin-top:30px;">
		<form method="post" action="index.php?controller=cart&act=do_bill">
			<table cellpadding="5" style="width: 100%;">
				<tr>
					<td>Họ và tên</td>
					<td><input type="text" name="hovaten" required></td>
				</tr>
				<tr>
					<td>Địa chỉ</td>
					<td><input type="text" name="diachi"></td>
				</tr>
				<tr>
					<td>Điện thoại</td>
					<td><input type="text" name="dienthoai"></td>
				</tr>
				<tr>
					<td>Ghi chú</td>
					<td>
						<textarea name="ghichu" style="width:300px; height: 150px;"></textarea>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="Thanh toán"></td>
				</tr>
			</table>
		</form>
	</div>
	<?php } ?>
</div>