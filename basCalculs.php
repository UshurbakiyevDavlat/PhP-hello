<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lesson 8</title>
</head>
<body>
       <h1> <form action= "basCalculs.php" method ="get">
            <input type = "number" name = "num1">
            <br>
            <input type = "number" name = "num2">
            <br>
            <input type = "submit">
        </form>
        Answer of addition is :
      
    <?php 
         echo $_GET["num1"]+$_GET["num2"];
    ?>  </h1>

</body>
</html>