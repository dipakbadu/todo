<?php
	session_start();
	include "../connection/connection.php";
	if(isset($_POST['submit'])){
		$taskname = $_POST['taskname'];
		$duedate = $_POST['duedate'];
		$duetime = $_POST['duetime'];
		$tasklist = $_POST['tasklist'];
		$username = $_SESSION['loggedin']; 

		$sql = "INSERT INTO addtask (TaskName,DueDate,DueTime,TaskList,UserName)
		VALUES ('$taskname','$duedate','$duetime','$tasklist','$username')";

		if($conn->query($sql)==TRUE){
			header("location: ../indax.php");
		}else{
			echo "error: ".$sql."<br/>";
		}
		$conn->close();
	}
?>