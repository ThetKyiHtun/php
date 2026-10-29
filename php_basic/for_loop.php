<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        for($num = 1; $num <= 5; $num++){
            echo $num;
            echo "<br>";
        }

        $luckyNumbers = [4, 8, 15, 16, 23, 42];
        for($i = 0; $i < count($luckyNumbers); $i++){
            echo $luckyNumbers[$i];
            echo "<br>";
        }
    ?>
</body>
</html>