<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function sayHi(){
        echo "Hello, I am a PHP function.<br>";
    }
    sayHi();
    echo "<br>";
    function sayHello($name, $age){
        echo "Hello $name, You are $age years old.<br>";
    }
    sayHello("Alice", 25);
    sayHello("Bob", 30);
    sayHello("Charlie", 35);
    ?>
</body>
</html>