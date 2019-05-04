<?php
	include "../connection/connection.php";
	$sql = "CREATE TABLE AddTask (
			id INT PRIMARY KEY AUTO_INCREMENT,
			TaskName varchar(50),
			DueTime time,
			TaskList varchar(50)
			)";
		if( $conn->query($sql)==TRUE){
			echo "table AddTask created successfully";
		} else{
			echo "Error creating table: " . $conn->error;
		}
		$alt = "ALTER TABLE addtask
 			 	ADD DueDate varchar(40) NOT NULL
    			AFTER TaskName";

    	$username = "ALTER TABLE addtask 
    				ADD username varchar(50) NOT NULL";
    			$conn->query($username);
		$conn->close();

		
?>