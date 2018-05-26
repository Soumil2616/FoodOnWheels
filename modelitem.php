<?php
include('dbconnect.php');
 $object = new connect();
 $connect = $object->conn();
 
 
 class fullmodel
 {
	 
	 //======================== special pizza ==============================//
	 public function special_item($connect,$table)
	 {
		 $sel_special_item = "select * from $table";
		 $s_exe = $connect->query($sel_special_item);
		 $s_special_item_fetchnum = $s_exe->num_rows;
		 while($s_special_item_fetch = $s_exe->fetch_object())
		 {
			 $row[] = $s_special_item_fetch;
		 }
		 return $row;
	 }
 }