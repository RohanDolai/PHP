<?php

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "dbregister";

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
    $stmt =$conn->prepare("INSERT INTO registrations (name, email, password) values(?,?,?)");
    $stmt->bind_param('sss',$name,$email,$password);
    $stmt->execute();
    echo "You have been successfully registered";
    $stmt->close();
    $conn->close();
}

?>