<?php

class User
{
	public function create($data) {
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "post_management";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}		

		$name = $data['name'];
		$email = $data['email'];
		$city = $data['city'];
		$password = $data['password'];

		echo $sql = "INSERT INTO `users`(`user_id`, `name`, `email`, `city`, `password`) 
						VALUES (
									null,
									'".$name."',
									'".$email."',
									'".$city."',
									'".$password."'
								)";

		if ($conn->query($sql) === TRUE) {
		   	return true;
		} else {
		    return false;
		}
	}	
}
?>