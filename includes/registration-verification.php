<?php
	session_start();
	include "../connection/connection.php";
	include_once '../includes/notification.php';
	
	if(empty($_POST['fullname']) || empty($_POST['username']) || empty($_POST['email']) || empty($_POST['password']) || empty($_POST['confirmPassword'])){
		createNotification("All the fields are mandatory and need to be correct for successful approval to join.");
		//header('location : ../signUpForm.php');
		header('location: ../registration/signup.php');
	}
	else{
		if(isset($_POST['fullname']) && isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirmPassword'])){

			$fullname = $_POST['fullname'];
			$username =$_POST['username'];
			$length = strlen($username);
			$email = $_POST['email'];
			$password = $_POST['password'];
			$confirmPassword = $_POST['confirmPassword'];

            }

            $alradyExist = "SELECT UserName FROM register WHERE UserName = '$username' ";
            $result = $conn->query($alradyExist);

            if($result->num_rows>0){
            	createNotification("userName is already Taken please choose another one!!");
            	header('location: ../registration/signup.php');
            }else{
            	$insertuser = "INSERT INTO register (FullName,UserName,Email,Password,confirmPassword) 
            				   VALUES('$fullname','$username','$email','$password','$confirmPassword')";
            }
            if($conn->query($insertuser) == TRUE){
            	createNotification("account created Sucessfully!!");
            	header("location: ../login/login.php");
            }else{
            	createNotification("unable to regiser");
            	header('location: ../registration/signup.php');
            }

		}
		

?>