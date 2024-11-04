<?php
// Database configuration
$servername = "localhost"; // usually localhost
$username = "root"; // replace with your database username
$password = ""; // replace with your database password
$dbname = "login_form_db"; // name of the database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO logins (username, password) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $username, $password);

// Set parameters and execute
$username = $_POST['username'];
$password = $_POST['password'];


if ($stmt->execute()) {

    header("Location: /index.view.php"); // Change this to your homepage URL
    exit();

} else {
    echo "Error: " . $stmt->error;
}

// Close connections
$stmt->close();
$conn->close();