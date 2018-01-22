<!DOCTYPE html>
<html>
<head>
	<title>Admin page</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="public/css/bootstrap.min.css">
  <script type="text/javascript" src="public/ckeditor/ckeditor.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">PHP15</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Trang chủ</a></li>
        <li class="active"><a href="index.php?controller=category_product">Danh mục sản phẩm</a></li>
        <li class="active"><a href="index.php?controller=product">Sản phẩm</a></li>
        <li class="active"><a href="index.php?controller=news">Tin tức</a></li>
        <li class="active"><a href="index.php?controller=user">Người dùng</a></li>
        <li class="active"><a href="index.php?controller=logout">Đăng xuất</a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
<div class="container" style="margin-top:80px;">
	<?php 
		if(file_exists($controller) == true)
			include $controller;
	 ?>
</div>
</body>
</html>