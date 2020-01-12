<?php

$DIR_FILE = 'C:\xampp\htdocs\post_management';
include($DIR_FILE. '\DB_Management.php');

class User
{
	public function create($data) {
		$db = new DB_Management();
		return $db->createUser($data);
	}	

	public function checkUser($data){
		$db = new DB_Management();
		return $db->checkUser($data);
	}

}
?>