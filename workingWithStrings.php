<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson5</title>
</head>
<body>

    <?php
        $text  = "Davlat is not sad , i guess, because of Malika";
        echo ("<h1>Work with strings</h1>");
        echo ("<hr>");
        echo ("To lower stringFunction:");
        echo (strtolower($text));
        echo "<br>";
        echo ("To upper stringFunction:");
        echo (strtoupper($text));
        echo "<br>";
        echo ("Working with index for example the first index of our text:");
        echo $text[0];
        echo "<br>";
        echo ("Working with replace stringFunction:");
        echo str_replace("not","very",$text);
        echo "<br>";        
        echo ("Working with substring function:");
        echo substr($text,14);
        echo "<br>";
        echo "<hr><h1>End of the lesson</h1>";
    ?>

</body>
</html>