<!DOCTYPE html>
<?php 
  $login = false;
  if($_SERVER["REQUEST_METHOD"] == $_POST){
    include "db.php";
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql = "Select * from user_system where email = '$username' AND password = '$password'";
    $result = mysqli_query($connect, $sql);
    $num = mysqli_num_rows($result);
    if($num >= 1){
      $login = true;
      session_start();
      $_SESSION['loggedin'] = true;
      $_SESSION['email'] = $username;
      header("location: shop.html");  
    }
    else{
      echo "invalid credentials";
    }
  }

?>


<html lang="en">
<head>

    <title>Login</title>
    
        <link rel="stylesheet" type="text/css" href="new.css">
</head>
<body>
    <div class="login-box">
        <p>Sign In</p>
        <form method = "post">
          <div class="user-box">
            <input required="" name="email" type="email">
            <label>Email</label>
          </div>
          <div class="user-box">
            <input required="" name="password" type="password">
            <label>Password</label>
           
          </div>
          <a>
            <input type="submit" value="Submit">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            
          </a>
        </form>
            <a href="forgot.html" class="new" target="_blank">forgot password</a>
            <p>Don't have an account? <a href="new.html" class="a2">Sign up!</a></p>
      </div>
</body>
</html> 