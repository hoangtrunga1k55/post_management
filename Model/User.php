<?php

class User
{
	public function create($data) {
		$name = $data['name'];
		$email = $data['email'];
		$city = $data['city'];
		$password = $data['password'];

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

		$sql = "INSERT INTO `users`(`user_id`, `name`, `email`, `city`, `password`) 
						VALUES (null,'$name','$email','$city','$password')";

		if ($conn->query($sql) === TRUE) {
		   	return true;
		} else {
		    return false;
		}
	}	

	public function checkUser($data){
		$email = $data["email"];
		$pass = $data["password"];

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

		$sql = "SELECT * FROM users WHERE email='$email' AND password='$pass'";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
	    	return true;
	    }else {
    		return false;
		}

		$conn->close();
	}

}
?>