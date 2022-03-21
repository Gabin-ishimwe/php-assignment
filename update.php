<?php 
    include "connect_mysql.php";
    if(isset($_GET["updateId"])) {
        $id = $_GET["updateId"];

        $query = "SELECT * FROM heroes_table WHERE id=$id";

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
<body>
    <form action="update.php" method="post">
        <!-- id <input type="number" name="id" value=<?php echo $valueId ?>><br><br> -->
        hero name <input type="text" name="hero_name" value=<?php echo $valueHero ?>><br><br>
        real name <input type="text" name="real_name" value=<?php echo $valueReal ?>><br><br>
        short_bio <textarea name="short_bio" id="" cols="20" rows="10" value=<?php echo $valueShort?>><?php echo $valueShort?></textarea><br><br>
        long_bio <textarea name="long_bio" id="" cols="40" rows="20" value=<?php echo $valueLong?>><?php echo $valueLong?></textarea><br><br>
        image <input type="file" name="image">
        <button name="update">update</button>
    </form>

    <?php
    include "image.php";
    if(isset($_POST["update"])) {
        // $newId = $_POST["id"];
        $hero_name = $_POST["hero_name"];
        echo $hero_name;
        $real_name = $_POST["real_name"];
        echo $real_name;
        $short_bio = $_POST["short_bio"];
        echo $short_bio;
        $long_bio = $_POST["long_bio"];
        echo $long_bio;
        echo $imageNewName;

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