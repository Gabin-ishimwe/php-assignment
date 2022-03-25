<?php 
    include "connect_mysql.php";
    if(isset($_GET["updateId"])) {
        $getid = $_GET["updateId"];

        $query = "SELECT * FROM heroes_table WHERE id=$getid";

        if($result = mysqli_query($connection, $query)) {
            while ($row = mysqli_fetch_assoc($result)) {
                // $valueId = $row["id"];
                // echo $valueId;
                $valueHero = $row["hero_name"];
                // echo $valueHero;
                $valueReal = $row["real_name"];
                // echo $valueReal;
                $valueShort = $row["short_bio"];
                // echo $valueShort;
                $valueLong = $row["long_bio"];
                
                // echo $valueLong;
            }
            
        }
          
        else {
            echo "no such id";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
h1{
    text-align: center;
    margin: 50px,10px,25px,0;
}
.container {
position: absolute;
left: 50%;
top: 50%;
transform: translate(-50%, -50%);
padding: 10px;
}
#hero-name{
    background-color: #F0F0F2;
}
#hero-real-name{
    background-color: #F0F0F2;
}
#hero-short{
    background-color: #F0F0F2;
}
#hero-long{
    background-color: #F0F0F2;
}
button{
    background-color: green;
    font-size: 14px;
    color: white;
    
}
p0{
    font-weight: bold;
}
p1{
    font-weight: bold;
}
p2{
    font-weight: bold;
}
p3{
    font-weight: bold;
}
p4{
    font-weight: bold;
}
</style>
<body>
<nav class="navbar">
        
        <div class="logo">Heroe Library</div>
        
        <ul class="nav-links">
        
        
        <div class="menu">
        <li><a href="/">Add hero</a></li>
        <li><a href="/">Log in</a></li>
        <li class="nav">
        <a href="/">Sign up</a>
        
        <ul class="dropdown">
        <li><a href="/">Dropdown 1 </a></li>
        <li><a href="/">Dropdown 2</a></li>
        <li><a href="/">Dropdown 2</a></li>
        <li><a href="/">Dropdown 3</a></li>
        <li><a href="/">Dropdown 4</a></li>
        
        </nav>
    <form action="update.php" method="post" enctype="multipart/form-data">
        <div class="container">
            <h1>ADD NEW HERO</h1>
            <input type="hidden" name="id" value=<?php echo $getid ?>>
            <label for="heroe-name">
                <p0>Hero name</p0>
                <br>
                <textarea id="hero-name" cols="20" rows="1.5" name="hero_name"><?php echo $valueHero?></textarea>
                <br>
                <p3>Hero real name</p3>
                <br>
                <textarea id="hero-real-name" cols="20" rows="1.5" name="real_name"><?php echo $valueReal?></textarea>
            </label>
            <br>
            <br>
            <label for="heroe-bio">
                <p1>Hero short bio</p1>
                <br>
                <textarea id="hero-short" cols="20" rows="5" name="short_bio"><?php echo $valueShort?></textarea>
                <br>
                <p2>Hero Long bio</p2>
                <br>
                <textarea id="hero-long" cols="30" rows="10" name="long_bio"><?php echo $valueLong?></textarea>
            </label>
            <br>
            <label for="hero-img">
                <p4>Add new hero image :</p4>
                <input type="file" id="hero-img" name="image" accept="image/*">

            </label>
            <br>
            <button type="submit" name="submit"><p>SUBMIT</p></button>
        </div>
    </form>

    <?php
    include "image.php";
    if(isset($_POST["submit"])) {
        $id = $_POST["id"];

        $hero_name = $_POST["hero_name"];
        // echo $hero_name;
        $real_name = $_POST["real_name"];
        // echo $real_name;
        $short_bio = $_POST["short_bio"];
        // echo $short_bio;
        $long_bio = $_POST["long_bio"];
        $queryUpdate = "UPDATE heroes_table SET hero_name='$hero_name', real_name='$real_name', short_bio='$short_bio', long_bio='$long_bio', image='$imageNewName' WHERE id='$id'";

        $result = mysqli_query($connection, $queryUpdate);
        if($result) {
            echo "data updated";
            // header("location: read.php");
        }
        else {
            echo "error in update". mysqli_error($connection);
        }
    }
    
    ?>
</body>
</html>