<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<?php
    require('connect_mysql.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']); 
        $username = mysqli_real_escape_string($connection, $username);
        $userPassword = stripslashes($_REQUEST['password']);
        $userPassword = mysqli_real_escape_string($connection, $userPassword);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'";
        $result = mysqli_query($connection, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        $user = mysqli_fetch_assoc($result);
        if ($rows == 1 && password_verify($userPassword, $user['password'])) {
            $_SESSION['username'] = $username;

            // Redirect to user dashboard page
            header("Location: read.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>
                  <p class='link'>Click here to <a href='read.php'>Just view our X-Men</a>.</p>
                  </div>";


        }
    } else {
?>
    <form class="form" method="post" name="login">
        <div class="mb-3">
        <label for="username" class="form-label">Password</label>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        </div>
        <div class="mb-3">
        <label for="username" class="form-label">Password</label>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        </div>
        
        <button type="submit" class="btn btn-primary">Login</button>
        <p class="link"><a href="signup.php">No Account? SignUp</a></p>
  </form>
<?php
    }
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>