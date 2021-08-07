<?php

include('connection.php');

$qr="SELECT * FROM todolist";
$res=mysqli_query($conn,$qr);




?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Test Project | list</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div>
		<h3>To Do List</h3>
		<table border="1">
			<?php 
				while($rows=mysqli_fetch_array($res))
				{
					echo "<tr>";
					echo "<td>".$rows['id']."</td>";
					echo "<td>".$rows['toDoTitle']."</td>";
					echo "<td><a href='template_edit.php?id=".$rows['id']."' class='add_new_btn'>Edit</a></td>";
					echo "<td><a href='delete.php?id=".$rows['id']."' class='add_new_btn'>Delete</a></td>";
					echo "</tr>";
				}
			?>
			
		</table>
		<div>
		<a href="template_edit.php" class="add_new_btn"> Add New</a>
	</div>
	</div>
</body>
</html>