<?php
require 'view/login.php';


session_start();

// Database connection details
$servername = "localhost";
$username = "root";  // Your MySQL username
$password = "";      // Your MySQL password
$dbname = "user_database1";  // The database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the username and password from the form
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

    // Hash the password using MD5 (for demo purposes; use stronger hash in production)
    $hashed_password = md5($input_password);

    // Prepare and execute the SQL query to find the user
    $sql = "SELECT * FROM users WHERE username = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $input_username, $hashed_password);
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the user exists
    if ($result->num_rows > 0) {
        // Login successful
        // Store user data in session
        $_SESSION['username'] = $input_username;

        // Redirect to another page (e.g., dashboard.php)
        header("Location: index.view.php");
        exit();  // Ensure script stops here
    } else {
        // Invalid login
        echo "Invalid username or password!";
    }
}

// Close the database connection
$conn->close();