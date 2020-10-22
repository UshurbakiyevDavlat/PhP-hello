<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lesson 14</title>
</head>
<body><h1>
    <form action = "associativeAr.php" method = "post">
    Student Name:<input type = "text" name = "StudName">
    <input type = "submit">
    
    </form>

    <?php
        $grades = array("Raf" => "A", "Aldik" => "A-" , "Karim" => "A" , "Elvira" => "A+");
        $studName = $_POST["StudName"];

        echo $grades[$studName];

    ?><h1>
</body>
</html>