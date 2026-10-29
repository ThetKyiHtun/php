<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name = "John Doe";
    $age = 30;
    echo "Hello World";
    echo "<h1>Hello World</h1>";
    echo "<hr>";
    echo "<h2>Welcome to PHP</h2>";
    echo "<p>My name is $name </p>";
    echo "<p>My age is {$name} </p>";
    echo "<p>My name is " . $name . "</p>";
    echo "<p>My age is " . $age . "</p>";

    // String functions
    echo strlen($name);
    echo "<br>";
    echo strtoupper($name);
    echo "<br>";
    echo strtolower($name);
    echo "<br>";
    echo str_replace("John", "Jane", $name);
    echo "<br>";
    echo $name[0];
    echo "<br>";
    echo "Mike"[0];
    echo "<br>";
    $name[0] = "B";
    echo $name[0];
    echo "<br>";
    echo substr($name, 2, 4); // 2 is the starting index and 4 is the length of the substring

    //Working with numbers
    echo "<br>";
    echo 50; // Integer or whole number
    echo "<br>";
    echo 3.14; // Float or decimal number
    echo "<br>";
    echo 5 + 10; // Addition
    echo "<br>";
    echo 5 - 10; // Subtraction
    echo "<br>";
    echo 5 * 10; // Multiplication
    echo "<br>";
    echo 10 / 5; // Division
    echo "<br>";
    echo 10 % 3; // Modulus
    echo "<br>";
    echo 5 ** 2; // Exponentiation
    echo "<br>";
    $x = 5;
    $x += 10; // $x = $x + 10
    echo $x;
    $x -= 5; // $x = $x - 5
    echo "<br>";
    $x *= 2; // $x = $x * 2
    echo "<br>";
    $x /= 5; // $x = $x / 5
    echo "<br>";
    $x++; // $x = $x + 1
    echo "<br>";
    $x--; // $x = $x - 1
    echo "<br>";
    echo abs(-5); // Absolute value
    echo "<br>";
    echo pow(2, 3); // 2 raised to the power of 3
    echo "<br>";
    echo sqrt(16); // Square root
    echo "<br>";
    echo round(3.14); // Round to nearest integer
    echo "<br>";
    echo ceil(3.14); // Round up
    echo "<br>";
    echo floor(3.14); // Round down
    echo "<br>";
    echo rand(1, 10); // Random number between 1 and 10
    echo "<br>";
    echo min(1, 2, 3, 4, 5); // Minimum value
    echo "<br>";
    echo max(1, 2, 3, 4, 5); // Maximum value
    
    ?>
</body>
</html>
