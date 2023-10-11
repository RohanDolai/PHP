<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="form">
            <form method="post">
                <label>Car Name :</label><br>
                <input type="text" require><br>
                <label>Model No:</label><br>
                <input type="text" require><br>
                <label>Top speed of your Car:</label><br>
                <input type="number" require><br>
                <label>How much KM have been used :</label><br>
                <input type="number" require><br>
                <label>Price at which you want to sell your car :</label><br>
                <input type="number" require><br>
                <label>Insert your car Image:</label><br>
                <input type="file" id="img" name="img" accept="image/*" require><br><br>
                <input type="submit" name="submit" value="upload">
            </form>
        </div>
    </div>
</body>
</html>