<?php
// Check if the user is logged in by checking the presence of cookies
if (!isset($_COOKIE['user_id']) || !isset($_COOKIE['username'])) {
    header("Location: login.php");
    exit();
}

// Retrieve user information from cookies
$user_id = $_COOKIE['user_id'];
$username = $_COOKIE['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
</head>
<body>

    <h2>User Profile</h2>
    <p>User ID: <?php echo $user_id; ?></p>
    <p>Username: <?php echo $username; ?></p>

</body>
</html>
