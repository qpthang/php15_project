<!-- ----------------- -->                
                <!-- Tin tức -->
            	<div class="box-container">
                	<div class="box-home box-news">
						<div class="header">
                            <div class="promote">
                                <a href="#"><span>Tin tức</span></a>
                            </div>
                        </div>
                        <div class="content">
                        	<ul>
                            <?php 
                                foreach($arr as $rows)
                                {
                             ?>
                            <!-- list news -->
                            	<li>
                                <div class="news">             
                                    <div class="news-img">
                                    	<img src="public/upload/news/<?php echo $rows["c_img"]; ?>" style="max-width: 200px;" />
                                    </div>
                                    <div class="news-desc">
                                    <p><a href="index.php?controller=news_detail&id=<?php echo $rows["pk_news_id"]; ?>" style="font-size:14px; color:red"><?php echo $rows["c_name"]; ?></a></p>
                                    <?php echo $rows["c_description"]; ?>
                                    </div>
                                 </div>
                                </li>
                            <!-- end list news -->
                            <?php } ?>
                                
                            </ul>
                                                        
                            <!-- paging -->
                            <div class="pagination" style="padding-top:20px; padding-bottom:20px;">
                            <ul>
                            <li><a href="#" class="prevnext disablelink">Trang</a></li>
                            <?php 
                                for($i=1; $i<=$num_page; $i++)
                                {
                             ?>
                            <li><a href="index.php?controller=news&p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
                            <?php } ?>
                            </ul>
                            </div>
                            <!-- end paging -->
                        </div>                        
                    </div>
                </div>
                <!-- hết tin tức-->
                <!-- ----------------- -->