<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $num = 1;
        while($num <= 5){
            echo $num;
            echo "<br>";
            $num++;
        }

        $num2 = 6;
        do{
            echo $num2;
            echo "<br>";
            $num2++;
        }while($num2 <= 5);
    ?>
</body>
</html>