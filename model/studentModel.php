<?php
	include '../library/connect.php';
	class studentModel extends database{
		function listStudent(){
			$sql = "SELECT * FROM student WHERE studentStatus=1";
			$result = mysqli_query($this->conn,$sql);
			if(mysqli_num_rows($result)>0){
				while ($row = mysqli_fetch_assoc($result)) {
					$data[] = $row;
				}
			}else{
				$data = array();			
			}
			return $data;
		}
		function addStudent($name){
			$sql = "INSERT INTO `student`(`studentName`) VALUES('$name')";
			mysqli_query($this->conn,$sql);
		}
		function deleteStudent($id){
			$sql = "UPDATE `student` SET `studentStatus`=0 WHERE `studentId`=$id";
			return mysqli_query($this->conn,$sql);
		}
		function editStudent($id,$name){
			$sql = "UPDATE `student` SET `studentName`='$name' WHERE `studentId`=$id";
			return mysqli_query($this->conn,$sql);
		}
		function getStudentById($id){
			$sql = "SELECT * FROM student WHERE studentId=$id";
			$result = mysqli_query($this->conn,$sql);
			if(mysqli_num_rows($result)>0){
				while ($row = mysqli_fetch_assoc($result)) {
					$data[] = $row;
				}
			}else{
				$data = array();
			}
			return $data;
		}
	}
?>