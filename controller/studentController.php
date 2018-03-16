<?php
	include '../model/studentModel.php';
	class  studentController {
		function listStudent(){
			$mStudent = new studentModel();
			$list = $mStudent->listStudent();
			return $list;
		}
		function addStudent(){
			$mStudent = new studentModel();
			if(isset($_POST['submit'])){
				$name = $_POST['name'];
				$name =  $mStudent->addStudent($name);
				header('location:listView.php');
			}
		}
		function deleteStudent($id){
			if(isset($_GET['id'])){
				$id = $_GET['id'];
			}
			$mStudent = new studentModel();
			$status = $mStudent->deleteStudent($id);
			header('location:listView.php');
			return $status;
		}
		function editStudent(){
			$mStudent = new studentModel();
			if(isset($_GET['id'])){
				$id = $_GET['id'];
				if (isset($_POST['submit'])) {
					$name = $_POST['name'];
					$mStudent->editStudent($id,$name);
					header('location:listView.php');
				}
			}
		}
		function getStudentById(){
			$mStudent = new studentModel();
			if(isset($_GET['id'])){
				$id = $_GET['id'];
				$getStudent = $mStudent->getStudentById($id);
			}
			
			return $getStudent;
		}
	}
?>