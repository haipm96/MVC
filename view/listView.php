<?php
	include '../controller/studentController.php';
	$cStudent = new studentController();
	$name = $cStudent->listStudent();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Danh sách sinh viên</title>
</head>
<body>
	<a href="addView.php">Add student</a>
	<table border="1px">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Action</th>
		</tr>
		<?php
			if($name){
				foreach ($name as $name) {
					?>
					<tr>
						<td><?=$name['studentId']?></td>
						<td><?=$name['studentName']?></td>
						<td><a href="editView.php?id=<?=$name['studentId']?>">Edit</a> <a href="deleteView.php?id=<?=$name['studentId']?>">Delete</a></td>
					</tr>
					<?php
				}
			}
		?>
	</table>
</body>
</html>