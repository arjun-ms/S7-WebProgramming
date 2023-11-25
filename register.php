<?php

// Create connection
$conn = new mysqli('127.0.0.1', 'root', '', 'college');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve user inputs from the form
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];

// SQL query to insert data into the 'users' table
$sql = "INSERT INTO users (user, pass, email) VALUES ('$username', '$password', '$email')";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Registration successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();

?>