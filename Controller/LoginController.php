<?php
    $DIR_FILE = 'C:\xampp\htdocs\post_management';
    include($DIR_FILE. '\Model\User.php');

    $data = $_POST;
    $user = new User();
    $result = $user->checkUser($data);
    $email = $data["email"];
    $pass = $data["password"];
   
    if ($result) {
        session_start();
        $_SESSION['email'] = $email; 
        $_SESSION['expire'] = time() + (3 * 60 * 60);
        header('Location: '."/post_management/View/home.php");
    } else {
        header('Location: '."/post_management/View/login.php");
    }

 ?>


