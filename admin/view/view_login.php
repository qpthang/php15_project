<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
</head>
<body>
<div class="container" style="margin-top:30px;">
	<div class="col-md-6 col-xs-offset-3">
		<div class="panel panel-primary">
			<div class="panel-heading">Login</div>
			<div class="panel-body">
				<form method="post" action="">
				<!-- row -->
				<div class="row" style="margin-top:5px;">
					<div class="col-md-2">Username</div>
					<div class="col-md-10">
						<input type="text" name="c_username" class="form-control" required>
					</div>
				</div>
				<!-- end row -->
				<!-- row -->
				<div class="row" style="margin-top:5px;">
					<div class="col-md-2">Password</div>
					<div class="col-md-10">
						<input type="password" name="c_password" class="form-control" required>
					</div>
				</div>
				<!-- end row -->
				<!-- row -->
				<div class="row" style="margin-top:5px;">
					<div class="col-md-2"></div>
					<div class="col-md-10">
						<input type="submit" class="btn btn-primary" value="Login">
						<input type="reset" class="btn btn-danger" value="Reset">
					</div>
				</div>
				<!-- end row -->
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>