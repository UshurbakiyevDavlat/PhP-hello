<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lesson 11</title>
</head>
<body><h1>
<form action = "PostvsGet.php"method = "post">
    <input type = "password" name = "pass">
    <input type = "submit">
</form>
    Password is:
    <?php
        echo  $_POST["pass"];
    ?></h1>
</body>
</html>