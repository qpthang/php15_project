<?php 
	class c_static extends controller{
		public function __construct(){
			parent::__construct();
			//tao bien session de luu thong tin user da truy cap
			//if(isset($_SESSION["visited"]) == false){
				$_SESSION["visited"] = true;
				//tang ben counter trong csdl len 1
				$this->model->execute("update tbl_counter set counter=counter+1");
			//}
			//lay so truy cap trong csdl
			$arr_visited = $this->model->fetch_one("select counter from tbl_counter");
			$visited = $arr_visited["counter"];		
			//-------------
			//so luong online
			//lay thoi gian truy cap hien tai dua vao bien time
			$time = time();
			//quy dinh thoi gian timeout, tinh bang giay. 15 phut=900 giay
			$timeout = 900;
			//lay session_id cua user truy cap
			$session_id = session_id();
			//kiem tra trong csdl cua user co session_id nhu tren, neu chua ton tai ban ghi nay thi insert bao ghi vao csdl
			$check = $this->model->count("select * from tbl_useronline where session_id='$session_id'");
			if($check > 0)
				$this->model->execute("update tbl_useronline set time=$time where session_id='$session_id'");
			else
				$this->model->execute("insert into tbl_useronline(session_id,time) values('$session_id',$time)");
			//xoa nhung user co thoi gian truy cap lon hon thoi gian timeout
			$time_new = time();
			$this->model->execute("delete from tbl_useronline where $time_new-time > $timeout");
			//lay so luong useronline
			$useronline = $this->model->count("select * from tbl_useronline");
			//-------------
			//load view
			include "view/view_static.php";							
		}		
	}
	new c_static();
 ?>