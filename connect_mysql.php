<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $dbHost = "127.0.0.1";
    $dbUser = "root";
    $dbPassword = "root123";
    $dbname = "heroes";

    $connection = mysqli_connect($dbHost, $dbUser, $dbPassword, $dbname);

    if($connection) {
        // echo "database connected";
    }

    else {
        echo "database not connected";
    }

    ?>
</body>
</html>