<div class="col-md-10 col-xs-offset-1">
	<div style="margin-bottom:5px;">
		<a href="index.php?controller=add_edit_product&act=add" class="btn btn-primary">
		Add product
		</a>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">
			List product
		</div>
		<div class="panel-body">
			<table class="table table-bordered table-hover">
			<tr>
				<th style="width:50px">STT</th>	
				<th style="width:120px;">Image</th>
				<th>Title</th>
				<th style="width:100px;">Category</th>
				<th style="width:100px;">Manage</th>
			</tr>
			<?php 
				$stt = 0;
				foreach($arr as $rows)
				{
					$stt++;
			 ?>
			<tr>
				<td style="text-align:center"><?php echo $stt; ?></td>
				<td style="text-align:center">	
				<?php if(file_exists("../public/upload/product/".$rows["c_img"])){ ?>
				<img src="../public/upload/product/<?php echo $rows["c_img"]; ?>" style="width: 100px;">
				<?php } ?>			
				</td>
				<td><?php echo $rows["c_name"]; ?></td>
				<td style="text-align: center;">
					<?php 
						$category = $this->model->fetch_one("select c_name from tbl_category_product where pk_category_product_id=".$rows["fk_category_product_id"]);
						echo isset($category["c_name"])?$category["c_name"]:"";
					 ?>
				</td>
				<td style="text-align:center">
					<a href="index.php?controller=add_edit_product&act=edit&id=<?php echo $rows["pk_product_id"]; ?>">Edit</a>&nbsp;
					<a href="index.php?controller=product&act=delete&id=<?php echo $rows["pk_product_id"]; ?>" onclick="return window.confirm('Are you sure?');">Delete</a>&nbsp;
				</td>
			</tr>
			<?php } ?>
			</table>
			<ul class="pagination">
			<?php 
				for($i=1;$i<=$num_page;$i++)
				{
			 ?>
				<li>
				<a href="index.php?controller=product&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>			
			<?php } ?>
			</ul>
		</div>
	</div>
</div>