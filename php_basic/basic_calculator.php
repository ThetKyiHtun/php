<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="basic_calculator.php" method="get">
        First Number: <input type="number" name="first_number" placeholder="Enter first number">
        <br><br>
        Second Number: <input type="number" name="second_number" placeholder="Enter second number">
        <br><br>
        <input type="submit">
    </form>
    Answer: <?php echo $_GET['first_number'] + $_GET['second_number'];?>
</body>
</html>