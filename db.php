<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="./db.php" method="post">
        <label>Enter your name First Name:</label><br>
        <input type="text" name="fname"><br>
        <label>Enter your name Last Name:</label><br>
        <input type="text" name="lname"><br>
        <label>Enter your Email :</label><br>
        <input type="email" name="email"><br>
        <label>Enter your age :</label><br>
        <input type="number" name ="age"><br>
        <label>Select your Gender :</label><br>
        <input type="radio" name="Gender"   value="m"> Male <br>
        <input type="radio" name="Gender" value="f"> Female <br>
        <input type="radio" name="Gender" value="o"> Other <br>
        <input type="submit" value="submit">
    </form>
</body>
</html>

<?php 

$firstName = $_POST['fname'];
$lastName = $_POST['lname'];
$email = $_POST['email'];
$age = $_POST['age'];
$Gender = $_POST['Gender'];

echo "Hello {$firstName} {$lastName} Welcome to the page."

?>