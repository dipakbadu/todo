<?php
	session_start();
	  include_once 'notification.php';
	include "../connection/connection.php";
		$username = $_POST['username'];
		$password = $_POST['password'];

		$sql = "SELECT * FROM register WHERE UserName ='$username' AND Password = '$password'";
		 $result = $conn->query($sql);
	
			$row = $result->fetch_assoc();
			//echo "Welcome $row[UserName]<br/>";

			$dbusername = $row['UserName'];
			$dbpassword = $row['Password'];

			if(empty($_POST['username']) && empty($_POST['password'])){
				createNotification("empty filed!!");
				header("location: ../login/login.php");
			}else{

				if(isset($_POST['username']) && isset($_POST['password'])){
					if($username == $dbusername && $password == $dbpassword){
					$_SESSION['loggedin'] = $username;
					//createNotification("login sucessfully!!");
					header('location: ../indax.php');
				}
				else{
					createNotification("Invalid login credentials provided. Please log in again");		
					header('location: ../login/login.php');
				}
			}
		}
?>