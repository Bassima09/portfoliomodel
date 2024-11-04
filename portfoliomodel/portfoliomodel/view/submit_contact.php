<?php

// Database configuration
$servername = "localhost"; // usually localhost
$username = "root"; // replace with your database username
$password = ""; // replace with your database password
$dbname = "contact_form_db"; // name of the database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO contacts (name, email, subject, message) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $email, $subject, $message);

// Set parameters and execute
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

if ($stmt->execute()) {
    echo "New record created successfully";
    header("Location: /index.view.php"); // Change this to your homepage URL
    exit();

} else {
    echo "Error: " . $stmt->error;
}

// Close connections
$stmt->close();
$conn->close();

