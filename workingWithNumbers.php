<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lesson6</title>
</head>
<body>
    <?php
        echo "<h1>Working with numbers :</h1><hr>";
        echo "<h2>Some common operations with numbers</h2>";

        echo "Num originally is equal to 25:";
        $num = 25;
        echo $num;
        echo "<br>";
        echo "After additional to 24:";
        $num += 24;
        echo $num;
        echo "<br>";
        echo "After substractional to 23:";
        $num -= 23;
        echo $num;
        echo "<br>";
        echo "After multiplication on 2:";
        $num *= 2;
        echo $num;
        echo "<br>";
        echo "After dividional on 4:";
        $num /= 4;
        echo $num;
        echo "<br>";
        echo "After one itteration on incrementation: ";
        $num++;
        echo $num;
        echo "<br>";
        echo "After one itteration on dectrementation:";
        $num--;
        echo $num;
        echo "<br><hr>";
        
        echo "<h2>Using some math functions</h2><hr>";

        echo "Using min function to find which is minimum:";
        echo min($num,$num+1);
        echo "<br>";

        echo "Using max function to find which is maximum:";
        echo max($num,$num+100);
        echo "<br>";

        echo "Using round function to round the number:";
        echo round($num*2.4);
        echo "<br>";
        
        echo "Ceil function is rounding up :";
        echo ceil($num *2.4);
        echo "<br>";
        
        echo "floor function is rounding down:";
        echo floor($num * 2.4);
        echo "<br>";

        echo "pow function is showing a number in some power:";
        echo pow($num,4);
        echo "<br>";

        echo "abs function is showing number in absolute value(in module):";
        echo abs($num*(-1));
        echo "<br><hr>";
        echo "<h1>The end of the lesson </h1>";
    ?>
</body>
</html>