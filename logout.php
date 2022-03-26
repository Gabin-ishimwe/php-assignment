<?php
error_reporting(0);
    session_start();
    // Destroy session
    if(session_destroy()) {
        // Redirecting To Home Page
        echo "<script>window.location.href='login.php'</script>";
        // header("Location: login.php");
    }
?>

