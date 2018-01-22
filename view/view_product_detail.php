<!-- ----------------- -->
            	<!-- Chi tiet san pham -->
            	<div class="box-container">
                	<div class="box-home box-news">
						<div class="header">
                            <div class="promote">
                                <a href="#"><span>Sản phẩm</span></a>
                            </div>
                        </div>
                        <div class="content">                        	
                        <div class="detai-product-left">
                            <img src="public/upload/product/<?php echo $arr["c_img"]; ?>" style="border:1px solid #dddddd; padding:1px; max-width: 200px;" />
                        </div>
                        <div class="detai-product-right">
                            <div class="product-list">
                                <ul>
                                    <li>
                                        Tên sản phẩm: <?php echo $arr["c_name"]; ?>
                                    </li>
                                    <li>
                                        Danh mục: 
                                        <?php 
                                            $category = $this->model->fetch_one("select c_name from tbl_category_product where pk_category_product_id=".$arr["fk_category_product_id"]);
                                            echo $category["c_name"];
                                         ?>
                                    </li>
                                    <li>
                                        Giá: <?php echo number_format($arr["c_price"]); ?> VNĐ
                                    </li>
                                    <li>
                                        <a href="index.php?controller=cart&act=add&id=<?php echo $arr["pk_product_id"]; ?>">
                                        <img src="public/images/icon-cart.jpg" /> Mua sản phẩm này
                                        </a>
                                    </li>
                                </ul>
                             </div>
                        </div>
                        <div style="clear:both; padding-top:15px;"></div>
                        	<ul>
                            	<li>
                                <div class="news1">     
                                    <div class="news-content">
                                    <p><a href="#" class="news-title"><?php echo $arr["c_name"]; ?> </a></p>
                                    
<p><?php echo $arr["c_description"]; ?></p>
<p><?php echo $arr["c_content"]; ?></p>
                                    </div>
                                 </div>                                
                                </li>
                            </ul>                                                      
                        </div>                        
                    </div>
                </div>
                <!-- hết chi tiet san pham -->                
               
            <!-- ----------------- -->    