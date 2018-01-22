<?php 
	class controller{
		//tao mot bien model, gan bien nay la object cua class model
		public $model;
		public function __construct(){
			$this->model = new model();
			/*
				$this->model->fetch(sql);
			*/
		}
	}
 ?>