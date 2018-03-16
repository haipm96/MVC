<?php
	include '../controller/studentController.php';
	$cStudent = new studentController();
	$cStudent->deleteStudent($id);
?>