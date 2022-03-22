<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="insert.php" method="post" enctype="multipart/form-data">
        <!-- id <input type="number" name="id"><br><br> -->
        hero name <input type="text" name="hero_name"><br><br>
        real name <input type="text" name="real_name"><br><br>
        short_bio <textarea name="short_bio" id="" cols="20" rows="10"></textarea><br><br>
        long_bio <textarea name="long_bio" id="" cols="40" rows="20"></textarea><br><br>
        image <input type="file" name="image">

        <button name="submit">submit</button>
    </form>

    <?php
    include "connect_mysql.php";
    include "image.php";
    
    if(isset($_POST["submit"])) {
        // $id = $_POST["id"];
        $hero_name = $_POST["hero_name"];
        $real_name = $_POST["real_name"];
        $short_bio = $_POST["short_bio"];
        $long_bio = $_POST["long_bio"];
        $query = "INSERT INTO heroes_table(hero_name, real_name, short_bio, long_bio, image) VALUES ('$hero_name', '$real_name', '$short_bio', '$long_bio', '$imageNewName')";

        if(mysqli_query($connection,  $query)) {
            echo "data inserted successfully";
            // header("location:read.php")
        }
        else {
            echo "data not inserted ". mysqli_error($connection);
        }

        // echo "$id<br>$hero_name<br> $real_name<br> $short_bio<br> $long_bio";
        // echo "id: " . $_POST["id"]. " hero name: ". $_POST["hero_name"];
    }
    ?>
</body>
</html>