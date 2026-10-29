<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="user_input.php" method="get">
        Name: <input type="text" name="name" placeholder="Enter your name">
        <input type="submit">
    </form>
    Your name is <?php echo $_GET['name'];?>
</body>
</html>