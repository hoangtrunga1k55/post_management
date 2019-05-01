<!DOCTYPE html>
<html>
<head>
  <link href="/post_management/css/style.css" type="text/css" rel="stylesheet">
</head>
<body>
  <form method="POST" action="/post_management/Controller/SignUpController.php">
    <input placeholder="Username" type="text" required="" name="name"><br><br>
    <input placeholder="Password" type="password" required="" name="password"><br><br>
    <input placeholder="email" type="email" required="" name="email"><br><br>
    <input placeholder="city" type="text" required="" name="city"><br><br>
    <button type="submit">SignUp</button>
  </form> 
</body>
</html>