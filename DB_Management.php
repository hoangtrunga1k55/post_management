<?php 
class DB_Management {
	private $__conn;

	public function connectDb() {		
		if(!$this->__conn) {
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "post_management";

			$this->__conn = new mysqli($servername, $username, $password, $dbname);
			
			if ($this->__conn->connect_error) {
			    die("__connection failed: " . $this->__conn->connect_error);
			}
		}
	}

	public function disconnect(){
		$this->__conn->close();
	}

	public function createUser($data) {
		$name = $data['name'];
		$email = $data['email'];
		$city = $data['city'];
		$password = $data['password'];

		$this->connectDb();

		$sql = "INSERT INTO `users`(`user_id`, `name`, `email`, `city`, `password`) 
						VALUES (null,'$name','$email','$city','$password')";

		return $this->__conn->query($sql);
	}

	public function checkUser($data) {
		$email = $data["email"];
		$pass = $data["password"];

		$this->connectDb();

		$sql = "SELECT * FROM users WHERE email='$email' AND password='$pass'";
		$result = $this->__conn->query($sql);
		
		return $result->num_rows > 0;
	}

	public function getAllUser()  {
		$this->connectDb();

		$sql = "SELECT user_id,name,email,city,password FROM users";
		$lsUsers = $this->__conn->query($sql);
		
		$this->disconnect();

		return $lsUsers;
	}
} 
?>