<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lesson 13</title>
</head>
<body><h1>
    <form action = "usingChekbox.php"method ="post">
        Apples:<input type = "checkbox" name = "fruits[]" value = "apple"><br>
        Bananas:<input type = "checkbox" name = "fruits[]" value = "banana"><br>
        watermelon:<input type = "checkbox" name = "fruits[]" value = "watermelon"> <br>
        <input type = "submit">
    </form>

    <?php
        $fruits = $_POST["fruits"];
        echo $fruits[0];echo "<br>";
    ?></h1>
</body>
</html>