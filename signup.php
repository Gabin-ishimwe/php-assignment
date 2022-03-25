<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<?php
require("connect_mysql.php");
if(isset($_POST["submit"])) {
        // $id = $_POST["id"];
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $username = $_POST["username"];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $query = "INSERT INTO users(first_name, last_name, username, password) VALUES ('$first_name', '$last_name', '$username', '$password')";

        if(mysqli_query($connection,  $query)) {
            echo "<div class='form'>
            <h3>You are registered successfully.</h3><br/>
            <p class='link'>Click here to <a href='login.php'>Login</a></p>
            </div>";
  }
        
        else {
            echo "<p class='link'>Click here to <a href='read.php'>Simply see our list of X-Men</a>.</p>
            </div>". mysqli_error($connection);

        }
    }

?>

<form class="form" method="post" name="signup">
        <h1 class="login-title">Signup</h1>
        <div class="md-3">
        <input type="text" class="login-input" name="username" placeholder="Username" >
        </div>
        <div class="md-3">
            
            </div>
           
            <div class="md-3">
            <input type="text" class="login-input" name="last_name" placeholder="Last name" >
            </div>
            <div class="md-3">
            <input type="text" class="login-input" name="first_name" placeholder="First name" >
            </div>
            <div class="md-3">
            
        <input type="password" class="login-input" name="password" placeholder="Password"/>
            </div>
        
     
        <button type="submit" class="btn btn-primary">SIGNUP</button>
        <p class="link"><a href="signup.php">New Registration</a></p>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>