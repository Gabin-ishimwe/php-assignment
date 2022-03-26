<?php
error_reporting(0);
    session_start();
    //Destroy session
    // if(session_destroy()) {
    //     // Redirecting To Home Page
    //     unset($_SESSION['username']);
    //     echo "<script>window.location.href='index.php'</script>";
    //     // header("Location: login.php");
    // // }

    session_start();
    unset($_SESSION['username']);
    session_destroy();
    echo "<script>window.location.href='index.php'</script>";

    // Initialize the session.
    // If you are using session_name("something"), don't forget it now!
    // session_start();

    // // Unset all of the session variables.
    // $_SESSION = array();

    // // If it's desired to kill the session, also delete the session cookie.
    // // Note: This will destroy the session, and not just the session data!
    // if (ini_get("session.use_cookies")) {
    //     $params = session_get_cookie_params();
    //     setcookie(session_name(), '', time() - 42000,
    //         $params["path"], $params["domain"],
    // }

    // session_start();
    // setcookie(session_name(), '', 100);
    // session_unset();
    // session_destroy();
    // $_SESSION = array();
?>