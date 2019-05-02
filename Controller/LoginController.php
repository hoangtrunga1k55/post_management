<?php
   $DIR_FILE = 'D:\mysql\htdocs\post_management';
   include($DIR_FILE. '\Model\User.php');

   $data = $_POST;
   $user = new User();
   $result = $user->checkUser($data);
   
   if ($result) {
      header('Location: '."/post_management/View/home.php");
   } else {
      header('Location: '."/post_management/View/login.php");
   }
 ?>