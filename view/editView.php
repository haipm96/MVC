<?php
	include '../controller/studentController.php';
	$cStudent = new studentController();
	$getStudent = $cStudent->getStudentById();
	$cStudent->editStudent();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sua thong tin</title>
</head>
<body>
	<?php
		foreach ($getStudent as $get) {
			?>
			Old name: <?=$get['studentName']?>
			<?php
		}
	?>
	
	<form action="#" method="POST">
		New name: <input type="text" name="name">
		<input type="submit" name="submit">
	</form>
</body>
</html>