<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions and Cookies</title>
</head>
<body>
    <h1>Sessions and Cookies</h1>

    <?php
        session_start();

        $_SESSION['username'] = "Jackey";
        $_SESSION['email'] = "sagar@gmail.com";


        $username = $_SESSION['username'];
        $email = $_SESSION['email'];
        echo "Username: ".$_SESSION['username']."<br>"."EMAIL: ".$_SESSION['email'];


        setcookie($username,$email,time()+3600,'/');

        echo "Cookie stored: ".$_COOKIE["username"]."<br>"."".$_COOKIE["email"];

        // Unset all session variables
        session_unset();

        // Destroy the session
        // session_destroy();
    ?>
</body>
</html>