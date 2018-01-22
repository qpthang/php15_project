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
                            	<li>
                                <div class="news1">       
                                    <div class="news-content">
                                    <p><a href="#" class="news-title"><?php echo $arr["c_name"]; ?> </a></p>
                                 <p><?php echo $arr["c_description"]; ?></p>
                                 <p><?php echo $arr["c_content"]; ?></p>   

                                    </div>
                                 </div>                                
                                </li>
                                <li>
                                	<div class="news-other-title">Tin tức khác</div>
                                    <div class="news-other-list">
                                        <ul>
                                        <?php 
                                            $arr_other_news = $this->model->fetch("select * from tbl_news where pk_news_id<$id order by pk_news_id desc");
                                            foreach($arr_other_news as $rows_other_news)
                                            {
                                         ?>
                                            <li>
                                            	<a href="index.php?controller=news_detail&id=<?php echo $rows_other_news["pk_news_id"]; ?>">
                                                <?php echo $rows_other_news["c_name"]; ?>
                                                </a>
                                            </li>
                                        <?php } ?>
                                        </ul>
                                     </div>
                                </li>
                            </ul>
                                                                                    
                        </div>                        
                    </div>
                </div>
                <!-- hết tin tức-->               
               
            <!-- ----------------- -->