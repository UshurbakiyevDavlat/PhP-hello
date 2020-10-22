<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lesson 9</title>
</head>
<body>
<h1>
    <form action = "buildMadLibs.php" method = "get">
            Color: <input type = "text" name = "color"><br> 
             Car: <input type = "text" name = "car"><br> 
            Dishes: <input type = "text" name = "dishes"><br>       
            <input type = "submit"> 
    </form>
    <?php
    $color = $_GET["color"];
    $car = $_GET["car"];
    $dishes = $_GET["dishes"];
        echo "<hr>";
    echo "I love this $color color";
    echo "<br> I wanna drive this  $car car";
    echo "<br> I would love to eat this $dishes now";

    ?><h1>
</body>
</html>