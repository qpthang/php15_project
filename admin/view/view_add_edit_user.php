<div class="col-md-8 col-xs-offset-2">	
	<div class="panel panel-primary">
		<div class="panel-heading">Add edit user</div>
		<div class="panel-body">
			<form method="post" action="<?php echo $form_action; ?>">
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Username</div>
				<div class="col-md-10"><input type="text" name="c_username" class="form-control" value="<?php echo isset($arr["c_username"])?$arr["c_username"]:""; ?>" <?php echo isset($arr["c_username"])?"disabled":""; ?>></div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Password</div>
				<div class="col-md-10"><input type="password" name="c_password" class="form-control" <?php echo isset($arr["c_username"])?"placeholder='Nhập mật khẩu mới nếu muốn thay đổi mật khẩu, nếu không thì để trắng'":""; ?>></div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2">Họ tên</div>
				<div class="col-md-10"><input type="text" name="c_fullname" class="form-control" value="<?php echo isset($arr["c_fullname"])?$arr["c_fullname"]:""; ?>"></div>
			</div>
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin-top:5px;">
				<div class="col-md-2"></div>
				<div class="col-md-10"><input type="submit" value="Process" class="btn btn-primary"></div>
			</div>
			<!-- end row -->
			</form>
		</div>
	</div>
</div>