<?php
include('connection.php');

// print_r($_POST);


if($_POST['submit'] == "submit"){
	$toDo_title = $_POST["todo_title"];

	$qry="INSERT INTO `todolist`(`toDoTitle`, `createdDate`) VALUES ('".$toDo_title."', '".time()."')";


	$qr=mysqli_query($conn,$qry);

	header("location:template_list.php");	
}elseif($_POST['submit'] == "update"){
	$toDo_title = $_POST["todo_title"];
	$id = $_POST['title_id'];
	$qry="UPDATE `todolist` SET `toDoTitle`='".$toDo_title."' WHERE `id`='".$id."' ";


	$qr=mysqli_query($conn,$qry);

	header("location:template_list.php");	
}








?>
