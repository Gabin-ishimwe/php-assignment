
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display/heroe</title>
    <link rel="stylesheet" href="/styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<style>
    body {

    }
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand text-light" href="#">X-Men</a>
      <button class="navbar-toggler text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="signup.php">Create Account</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-light" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-light" href="read.php">View X-Men</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-light" href="public.php" tabindex="-1" aria-disabled="true">Learn More</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <div class="container-md">
        <div class ="hero-img">
            <img src="./uploads/heroe.png" alt="img" class="img-fluid">
        </div>
        <div class="hero-info">
            <h1>Hero name</h1>
            <br>
            <h1>Real name</h1>
            <p>Lorem Ipsum is simply dummy text of the 
                printing and typesetting industry. 
                Lorem Ipsum has been the industry's 
                standard dummy text ever since the 1500s......</p>
            <p></p>
            <br>
            <button type="reset" class="btn-1"><a href="update.php">Update</a> </button>
        </div>
    </div>
    <br>
    <br>

    <?php
    error_reporting(0);
    include "connect_mysql.php";

    $query = "SELECT * FROM heroes_table;";

    $result = mysqli_query($connection, $query);
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {


            echo "<div class='container'>
            <div class='row row-cols-2'>
           <div class='col'>
            <div class ='cols-3'>
            <div class='col'>
             <img src='./uploads/$row[image]' class='img-fluid' alt='Hero Images'>
            </div>
          
            <div class='col'>
                <h1>$row[hero_name]</h1>
            </div>
            <div class='col'>
                <h1>$row[real_name]</h1>
            </div>
            <div class='col'>
                <p>$row[short_bio]</p><br><br>
            </div>
            <div class='col'>
                <p>$row[long_bio]</p>
            </div>
            </div>
        </div>";
        }
    }
    else {
 
    }
    ?>
  <footer>
  <nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand text-light" href="#">X-Men</a>
      <button class="navbar-toggler text-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active text-light" aria-current="page" href="signup.php">Create Account</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-light" href="login.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-light" href="read.php">View X-Men</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active text-light" href="public.php" tabindex="-1" aria-disabled="true">Learn More</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display/heroe</title>
</head>
<style>
    * {
 margin: 0;
 padding: 0;
 box-sizing: border-box;
}
body {
 font-family: 'Courier New', Courier, monospace;
}
a {
 text-decoration: none;
}
li {
 list-style: none;
}
.navbar {
 display: flex;
 align-items: center;
 justify-content: space-between;
 padding: 20px;
 background-color: rgb(159, 163, 163);
 color: #fff;
}
.nav-links a {
 color: #fff;
}
/* LOGO */
.logo {
 font-size: 32px;
}
/* NAVBAR MENU */
.menu {
 display: flex;
 gap: 1em;
 font-size: 18px;
}
.menu li:hover {
 background-color: #c5dada;
 border-radius: 5px;
 transition: 0.3s ease;
}
.menu li {
 padding: 5px 14px;
}
/* DROPDOWN MENU */
.nav {
 position: relative; 
}
.dropdown {
 background-color: rgba(184, 195, 202, 0.788);
 padding: 1em 0;
 position: absolute; /*WITH RESPECT TO PARENT*/
 display: none;
 border-radius: 8px;
 top: 35px;
}
.dropdown li + li {
 margin-top: 10px;
}
.dropdown li {
 padding: 0.5em 1em;
 width: 8em;
 text-align: center;
}
.dropdown li:hover {
 background-color: #4c9e9e;
}
.snav:hover .dropdown {
 display: block;
}
.container{
    display: flex;
    align-items: center;
    
}
.hero-img1{
    width: 400px;
    margin-left: 50px;
    vertical-align: middle;
    margin-top: 100px;

}
h1{
    font-size: 20px;
    font-weight: bolder;
    
    
    
}
h2{
    font-size: 15px;
    font-weight: bolder;
    
}
.hero-info{
    margin-left: 20px;
}
.btn-1{
    background-color: rgb(39, 37, 37);
    color: white;
    font-size: 12px;
    padding: 12px, 20px;
    text-decoration: none;
    width: 100px;
    height: 50px;
    margin: 5px
}

.btn-2{
    background-color: rgb(39, 37, 37);
    color: red;
    font-size: 12px;
    padding: 12px, 20px;
    text-decoration: none;
    width: 100px;
    height: 50px;
}


</style>
<body>
    <nav class="navbar">
        
        <div class="logo">Heroe Library</div>
        
        <ul class="nav-links">
        
        
        <div class="menu">
        <li><a href="./main.php">Add hero</a></li>
        <li><a href="./login.php">Log in</a></li>
        <li class="nav">
        <a href="./signup.php">Sign up</a>
        
        <ul class="dropdown">
        <li><a href="/">Dropdown 1 </a></li>
        <li><a href="/">Dropdown 2</a></li>
        <li><a href="/">Dropdown 2</a></li>
        <li><a href="/">Dropdown 3</a></li>
        <li><a href="/">Dropdown 4</a></li>
        
        </nav>
    <div class="container">
        <div class ="hero-img">
            <img src="./uploads/heroe.png" alt="img" class="hero-img1">
        </div>
        <div class="hero-info">
            <h1>Hero name</h1>
            <br>
            <h1>Real name</h1>
            <p>Lorem Ipsum is simply dummy text of the 
                printing and typesetting industry. 
                Lorem Ipsum has been the industry's 
                standard dummy text ever since the 1500s......</p>
            <p></p>
            <br>
            <button type="reset" class="btn-1">Update</button>
        </div>
    </div>
    <br>
    <br>

    <?php
    include "connect_mysql.php";

    $query = "SELECT * FROM heroes_table;";

    $result = mysqli_query($connection, $query);
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {

            // echo "<ul>
            // <li> hero name: $row[hero_name]</li>
            // <li> real name: $row[real_name]</li>
            // <li>short bio: $row[short_bio]</li>
            // <li>long bio: $row[long_bio]</li>
            // </ul>
            // <img src='uploads/$row[image]' name='image' class='image'>
            
            // <button name='delete'><a href='delete.php?deleteId=$row[id]'>delete</a></button>
            // <button name='update'><a href='update.php?updateId=$row[id]'>update</a></button>";

            echo "<div class='container'>
            <div class ='hero-img'>
                <img src='./uploads/$row[image]' alt='img' class='hero-img1'>
            </div>
            <div class='hero-info'>
                <h1>$row[hero_name]</h1>
                <br>
                <h1>$row[real_name]</h1>
                <p>$row[short_bio]</p><br><br>
                <p>$row[long_bio]</p>
                <br>
            </div>
        </div>
        <br>
        <br>";
        }
    }
    else {
        echo "no data";
    }
    ?>
    <!-- <div class="container">
        <div class ="hero-img">
            <img src="./uploads/heroe.png" alt="img" class="hero-img1">
        </div>
        <div class="hero-info">
            <h1>Hero name</h1>
            <br>
            <h1>Real name</h1>
            <p>Lorem Ipsum is simply dummy text of the 
                printing and typesetting industry. 
                Lorem Ipsum has been the industry's 
                standard dummy text ever since the 1500s......</p>
            <p></p>
            <br>
            <button type="reset" class="btn-1">Update</button>
        </div>
    </div> -->
        
</body>

</html>