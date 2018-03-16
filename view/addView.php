<?php
	include '../controller/studentController.php';
	$cStudent = new studentController();
	$cStudent->addStudent();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Them sinh vien</title>
</head>
<body>
	<form action="#" method="POST">
		Name: <input type="text" name="name">
		<input type="submit" name="submit">
	</form>
</body>
</html>