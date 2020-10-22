<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lesson 17</title>
</head>
<body><h1>
    <?php
        $isMale = true;
        $isShort = true;

        if ($isMale && $isShort) {
            echo "You are short male";
        } elseif ($isMale && !$isShort) {
            echo "You are not short male";
        } elseif (!$isMale && $isShort) {
            echo "You are not male but you are short";
        } else {
            echo "You are neiether male nor short";
        }

?></h1>
</body>
</html>