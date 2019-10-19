<?php
	$DIR_FILE = 'C:\xampp\htdocs\post_management';

	include($DIR_FILE. '\Model\User.php');
	
	$data = $_POST;
	$user = new User();
	$isCreateSucess = $user->create($data);
	
	if($isCreateSucess) {
		header('Location: '."/post_management/View/login.php");
	} else {
		header('Location: '."/post_management/View/signup.php");
	}

 
 ?>