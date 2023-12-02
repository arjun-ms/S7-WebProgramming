<?php
// Assume the user is authenticated and set a cookie with user information
$user_id = 123;
$username = 'john_doe';
setcookie('user_id', $user_id, time() + 3600, '/');
setcookie('username', $username, time() + 3600, '/');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Successful</title>
</head>
<body>

    <h2>Login Successful</h2>
    <p>Welcome, <?php echo $username; ?>!</p>
    <p><a href="profile.php">Go to Profile</a></p>

</body>
</html>