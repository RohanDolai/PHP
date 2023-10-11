<?php
// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $password = $_POST["password"];

    // TODO: Add validation and sanitization

    // Connect to database
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "dbregister";
    $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Escape user input to prevent SQL injection
    $name = $conn->real_escape_string($name);
    $password = $conn->real_escape_string($password);

    // Check if email and password are correct
    $sql = "SELECT * FROM registrations WHERE name = '$name' AND password = '$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // Login successful
        header("Location: welcome.php");
        exit();
    } else {
        // Login failed
        echo "Invalid email or password";
    }

    // Close connection
    $conn->close();
}
