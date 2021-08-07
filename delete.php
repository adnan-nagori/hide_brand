<?php
	include('connection.php');

	if (isset($_GET['id'])){
	$id = $_GET['id'];
	// echo $id;
	
	$data = "delete from `todolist` where `id` = '".$id."'";
	$qr=mysqli_query($conn,$data);
		header("location:template_list.php");
	}
?>
