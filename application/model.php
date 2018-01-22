<?php 
	class model{
		//lay nhieu ban ghi
		public function fetch($sql){
			global $link;
			$result = mysqli_query($link,$sql);
			$arr = array();
			while($rows = mysqli_fetch_array($result))
				$arr[] = $rows;
			return $arr;
		}
		//ket qua tra ve mot ban ghi
		public function fetch_one($sql){
			global $link;
			$result = mysqli_query($link,$sql);
			$arr = mysqli_fetch_array($result);
			return $arr;
		}
		//tinh tong so ban ghi
		public function count($sql){
			global $link;
			$result = mysqli_query($link,$sql);
			//ham mysqli_num_rows su dung de lay tong so ban ghi da truy van duoc
			return mysqli_num_rows($result);
		}
		//thuc thi cau truy van
		public function execute($sql){
			global $link;
			mysqli_query($link,$sql);
		}
		//lay ban ghi vua moi insert vao
		public function get_insert_id($id_name,$table_name){
			global $link;
			$result = mysqli_query($link,"select $id_name from $table_name order by $id_name desc limit 0,1");
			$row = mysqli_fetch_array($result);
			return $row;
		}
	}
 ?>