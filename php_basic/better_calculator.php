<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="better_calculator.php" method="post">
            First Number: <input type="number" name="num1" step="0.01" placeholder="Enter first number"><br>
            Second Number: <input type="number" name="num2" placeholder="Enter second number"><br>
            Operation: <input type="text" name="operation" placeholder="Enter operation (+, -, *, /)"><br>
            <input type="submit" value="Calculate">
    </form>
    <?php
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        if($operation == "+"){
            echo $num1 + $num2;
        }
        elseif($operation == "-"){
            echo $num1 - $num2;
        }
        elseif($operation == "*"){
            echo $num1 * $num2;
        }
        elseif($operation == "/"){
            echo $num1 / $num2;
        }else{
            echo "Invalid operation";
        }
    ?>
</body>
</html>