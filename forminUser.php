<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lesson 7</title>
</head>
<body>
        <h1>
        <form action = "forminUser.php" method="get" >
       Your name:<input type  = "text" name = "name">
       <br>
       <br>
        Your age :<input type = "number" name = "age">
        <br>
        <input type = "submit">

        </form>
        <br></h1>
        
        <!--TODO : Why it is seeing this piece of code until it should?-->

    Hello,<?php echo $_GET["name"];?>
    <br>
    Your age is:<?php echo $_GET["age"];?>

</body>
</html>