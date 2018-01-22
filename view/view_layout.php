<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="public/css/reset.css" rel="stylesheet" type="text/css" />
    <link href="public/css/styles.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="public/css/paginate.css">
    <script type="text/javascript" src="public/js/jquery-1.7.1.min.js"></script>
    <title>Cửa hàng bé yêu</title>
</head>

<body>
	<div id="wrapper">
    
    <!-- begin header -->
    	<div id="header">
        	<div id="logo">
            	<a href="/"><img src="public/images/logo.jpg" title="Cửa hàng bé yêu" /></a>
            </div>
            <div id="top-nav">				
                <div id="info">
                	<p><span>Địa chỉ: Số 623, Hoàng Hoa Thám, Q. Ba Đình</span></p>
                	<p><span>Điện thoại:  04-3761 8738 - Hotline: 012345678</span></p>
                </div>
                <div id="menu">
                	<ul>
                    	<li><a href="index.php" class="actived"><span>Trang chủ</span></a></li>
                        <li><a href="index.php?controller=news"><span>Tin tức</span></a></li>
                        <li><a href="index.php?controller=cart"><span>Giỏ hàng</span></a></li>
                        <li class="last"><a href="#"><span>Liên hệ</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="search-bar">
            	<form method="get">
                	<div class="search-box">
    	            	<input type="text" placeholder="Nhập từ khóa tìm kiếm" />
						<a href="#"><img src="public/images/buttun-search.jpg" title="Tìm kiếm" /></a>
                    </div>
                    <div class="cart-message">
                    	<a href="#" class="cart"><img src="public/images/icon-cart.jpg" title="click vào đây để xem giỏ hàng của bạn"></a>
                    	<span class="message">Có <strong>4</strong> sản phẩm trong giỏ hàng của bạn</span>
                    </div>
                </form>
            </div>
        </div>
        <!-- end header -->
        
        <div id="content">        	
        
            <!-- begin left -->
            <div class="left-col">
            
            	<?php include "controller/controller_category.php"; ?>
                <!-- support -->
                <div class="support">
                    <div class="support_title">Hỗ trợ bán hàng</div>
                    <div>
                        <img src="public/images/icon-skype.jpg" border="0">
                    </div>
                    <div class="support_title">Hỗ trợ bán hàng</div>
                    <div class="support_ym">
                        <img src="public/images/icon-skype.jpg" border="0">
                    </div>
                </div>
                <!-- end support -->
                <?php 
                	include "controller/controller_hotnews.php";
                 ?>
                
                
                <?php include "controller/controller_static.php"; ?>
                
                <!-- adv -->
                <div class="box_content">
                <div class="logo"><a href="#"><img src="public/images/adv1.gif" width="240"></a></div>
                
            	</div>
                <!-- end adv -->
                
            </div>
            
            <!-- end left -->
            
            
            <!-- begin right -->
            <div class="right-col">
            <!-- ----------------- -->
            	<!-- adv -->
            	<div class="main-adv"><img src="public/images/adv3.jpg" /></div>
                <!-- end adv -->
            	<?php 
            		if(file_exists($controller))
            			include $controller;
            	 ?>
                
                <!-- quảng cáo -->
                <div class="box-container">
					<div class="box-ads">
                    	<ul>
                        	<li><a href="#"><img src="public/images/quang-cao.jpg" style="width:735px; padding:2px; background:#fff; border:1px solid #ccc;"  title="Nhận vé thăm quan cho khách hàng mua hàng có hóa đơn lớn hơn 1 triệu đồng"/></a></li>
                        </ul>
                    </div>
                </div>
                <!-- hết quảng cáo -->                
               
            <!-- ----------------- -->    
            </div>
            
            <!-- end right -->
            
            
        </div>
        
        <!-- begin footer -->
        <div id="footer">
        	<div class="footer-c">
                <div class="quick-link">
                    <ul>
                        <li class="header">Quản lý tài khoản</li>
                        <li><a href="#">Tạo tài khoản</a></li>
                        <li><a href="#">Đăng nhập</a></li>
                        <li><a href="#">Thay đổi thông tin tài khoản</a></li>
                        <li><a href="#">Quên mật khẩu</a></li>
                        <li><a href="#">Lịch sử mua hàng</a></li>
                    </ul>
                    
                    <ul>
                        <li class="header">Trợ giúp</li>
                        <li><a href="#">Quy định sử dụng</a></li>
                        <li><a href="#">Hướng dẫn mua hàng</a></li>
                        <li><a href="#">Phương thức thanh toán</a></li>
                        <li><a href="#">Phương thức vận chuyển</a></li>
                        <li><a href="#">Câu hỏi thường gặp</a></li>
                    </ul>
                    
                    <ul>
                        <li class="header">Hỗ trợ khách hàng</li>
                        <li><a href="#">Mọi thắc mắc xin vui lòng liên hệ:</a></li>
                        <li><strong>Tel:</strong> 04.3761 8738</li>
                        <li><strong>Hotline:</strong>  0912 795 723</li>
                        <li><strong>Email:</strong>  lienhe@shoptretho.com.vn</li>
                        <li><strong>Website:</strong>  www.ShopTreTho.com.vn</li>
                    </ul>
                    
                    <ul>
                        <li class="header">Thông tin cửa hàng</li>
                        <li><a href="#">Về ShopTreTho.com.vn</a></li>
                        <li><a href="#">Tin tuyển dụng</a></li>
                        <li><a href="#">Báo chí viết</a></li>
                        <li><a href="#">Thông tin khuyến mại</a></li>
                        <li><a href="#"> Sơ đồ web</a></li>
                    </ul>
                </div>
                
                <div class="copyright">
                    <p>Bản quyền © 2009-2012 ShopTreTho.com.vn - Thiên đường cho Bé!</p>
                    <p><strong>Số 623, Hoàng Hoa Thám, Q. Ba Đình. Tel: 04-3761 8738</strong></p>
                </div>
            </div>
        </div>
        <!-- end footer -->
        
    </div>
</body>
</html>