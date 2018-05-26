<?php
include 'connect.php';
if(isset($_REQUEST['chk']))
{
	$id = $_REQUEST['id'];
	$del = "delete from checkout where C_id = '$id'";
	$delexe = $connection->query($del);
	
	header("location:checkout.php");
}
?>