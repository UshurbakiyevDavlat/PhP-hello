<!DOCTYPE html>
<html lang="en">
<head>
    <title>Guessing Game for 4b330002 </title>
</head>
<body>
<h1>Hi,we can start to play a guess game.</h1>
    <p>
<?php
    if(!isset($_GET['guess'])){
        echo "Missing guess parameter";
        return;
    }
    else if(strlen($_GET['guess'])<1 && strlen($_GET['guess'])<'1'){
        echo "Your guess is too short";
       return;
    }
    else if(!is_numeric($_GET['guess'])){
        echo "Your guess is not a number";
       return;
    }
    else if($_GET['guess']<23){
        echo "Your guess is too low";
        return;
    }
    else if($_GET['guess']>23){
        echo "Your guess is too high";
        return;
    }
    
    echo "Congratulations - You are right";
    
?>
    </p>
</body>
</html>
