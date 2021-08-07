<?php
	include('connection.php');

	if (isset($_GET['id'])){
	$id = $_GET['id'];
	
	$data = "select * from `todolist` where `id` = '".$id."'";

	$res = mysqli_query($conn,$data);
	while($rows=mysqli_fetch_array($res))
				{
					$title = $rows['toDoTitle'];

				}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Test Project | list</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<script>
  function validate()
  {
  	var toDoTitle 			= document.forms["myform"]["todo_title"].value;
  	 if(toDoTitle == "" ){
			  
		alert("Field Can't be Blank !");
		return false;
	}

  }
</script>
<body>
	<div>
		<?php if(isset($id)){ ?>
				<h3>Edit Title</h3>
			<?php }else{ ?>
				<h3>Add New Title</h3>
			<?php } ?>
		
		<form class="form-horizontal" action="controller.php" name="myform" method="post" onsubmit="return validate();" >
			<input type="hidden" name="title_id" value='<?php if(isset($id)){ echo $id; } else { echo ""; }?>'>
			<textarea name="todo_title" rows="4" cols="50" ><?php if(isset($title)){ echo $title; } else { echo ""; }?></textarea><br>
			<?php if(isset($id)){ ?>
				<button type="submit" value="update" name="submit" class="addtitle_btn">Update Title</button>
			<?php }else{ ?>
				<button type="submit" value="submit" name="submit" class="addtitle_btn">Save Title</button>
			<?php } ?>
		</form>
	</div>
</body>
</html>