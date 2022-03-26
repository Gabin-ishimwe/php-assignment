<?php
include "connect_mysql.php";
if(isset($_GET["deleteId"])) {  # get method helps access the params in header
    $delId = $_GET["deleteId"];
    $query = "DELETE FROM heroes_table WHERE id=$delId";

    if(mysqli_query($connection, $query)) {
        // header("Location:dashboard.php");
        echo "<script>window.location.href='dashboard.php'</script>";
        // echo "<h1>section deleted</h1>";
    }
    else {
        echo "not deleted";
    }
}


?>