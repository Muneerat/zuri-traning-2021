<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Login Page</h1>
  <form action="login_action.php" method="post">
  <input type="text" name="full_name" placeholder="Enter your full name"><br><br>
   <input type="text" name="username" placeholder="Enter your username"><br><br>
   <input type="password" name="password" placeholder="Enter your password"><br><br>
   <button type="submit" name="login" value="submit">Sign In</button>
  </form>  
  <a href="logout.php">logout</a>
</body>
</html>
