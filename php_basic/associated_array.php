<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="associated_array.php" method="post">
        <input type="text" name="name" placeholder="Enter your name">
        <input type="submit">
    </form>
    <?php
    $grades = array("John" => 85, "Jane" => "A+", "Jim" => 78, "Jill" => 90);
    echo $grades["John"];
    echo "<br>";
    echo $grades["Jane"];
    echo "<br>";
    echo count($grades);
    echo "<br>";
    echo $grades[$_POST['name']];
    ?>
</body>
</html>