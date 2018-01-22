<div class="col-md-10 col-xs-offset-1">
	<div class="panel panel-primary">
		<div class="panel-heading">Add edit news</div>
		<div class="panel-body">
			<form method="post" action="<?php echo $form_action; ?>" enctype="multipart/form-data">
			<!-- row -->
			<div class="row" style="margin:5px">
				<div class="col-md-2">Title</div>
				<div class="col-md-10">
					<input type="text" name="c_name" class="form-control" required value="<?php echo isset($arr["c_name"])?$arr["c_name"]:""; ?>">
				</div>
			</div>			
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin:5px">
				<div class="col-md-2"></div>
				<div class="col-md-10">
					<input <?php echo isset($arr["c_hotnews"])&&$arr["c_hotnews"]==1?"checked":""; ?> type="checkbox" name="c_hotnews" id="hot_news"> <label for="hot_news">Hot news</label>
				</div>
			</div>			
			<!-- end row -->
			
			<!-- row -->
			<div class="row" style="margin:5px">
				<div class="col-md-2">Description</div>
				<div class="col-md-10">
					<textarea style="width:700px;height:100px;" name="c_description">
						<?php 
							echo isset($arr["c_description"])?$arr["c_description"]:"";
						?>
					</textarea>	
					<script type="text/javascript">
						CKEDITOR.replace("c_description");
					</script>				
				</div>
			</div>			
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin:5px">
				<div class="col-md-2">Content</div>
				<div class="col-md-10">
					<textarea style="width:700px;height:100px;" name="c_content">
					<?php 
							echo isset($arr["c_content"])?$arr["c_content"]:"";
						?>
					</textarea>
					<script type="text/javascript">
						CKEDITOR.replace("c_content");
					</script>
				</div>
			</div>			
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin:5px">
				<div class="col-md-2">Image</div>
				<div class="col-md-10">
					<input type="file" name="c_img">
				</div>
			</div>			
			<!-- end row -->
			<!-- row -->
			<div class="row" style="margin:5px">
				<div class="col-md-2"></div>
				<div class="col-md-10">
					<input type="submit" name="btn" class="btn btn-primary" value="Process">
				</div>
			</div>			
			<!-- end row -->
			</form>
		</div>
	</div>
</div>