<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .image {
        width: 500px;
        height: 500px;
    }
</style>
<body>
    <button><a href="insert.php">create</a></button>
    <?php
    include "connect_mysql.php";

    $query = "SELECT * FROM heroes_table;";

    $result = mysqli_query($connection, $query);
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            // echo "id: $row[id] <br>hero_name: $row[hero_name]<br> real name: $row[real_name]<br>
            // short bio: $row[short_bio]<br>long bio: $row[long_bio]";

            echo "<ul>
            <li> hero name: $row[hero_name]</li>
            <li> real name: $row[real_name]</li>
            <li>short bio: $row[short_bio]</li>
            <li>long bio: $row[long_bio]</li>
            </ul>
            <img src='uploads/$row[image]' name='image' class='image'>
            
            <button name='delete'><a href='delete.php?deleteId=$row[id]'>delete</a></button>
            <button name='update'><a href='update.php?updateId=$row[id]'>update</a></button>";
        }
    }
    else {
        echo "no data";
    }
    ?>
</body>
</html>