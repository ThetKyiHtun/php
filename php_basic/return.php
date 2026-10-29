<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function cute($num){
        return $num * $num * $num;
    }
    $cuteResult = cute(3);
    echo $cuteResult;
    ?>
</body>
</html>