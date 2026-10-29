<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="mad_libs_game.php" method="get"> //get and post are two different methods of sending data to the server. Get method appends the form data to the URL, while post method sends the form data in the body of the HTTP request.
        
        Name: <input type="text" name="name" placeholder="Enter your name">
        <br><br>
        Place: <input type="text" name="place" placeholder="Enter a place">
        <br><br>
        Animal: <input type="text" name="animal" placeholder="Enter an animal">
        <br><br>
        Adjective: <input type="text" name="adjective" placeholder="Enter an adjective">
        <br><br>
        Verb: <input type="text" name="verb" placeholder="Enter a verb">
        <br><br>
        <input type="submit">
    </form>
    <?php
        $name = $_GET['name'];
        $place = $_GET['place'];
        $animal = $_GET['animal'];
        $adjective = $_GET['adjective'];
        $verb = $_GET['verb'];
        echo "Once upon a time, there was a $adjective $animal named $name who lived in $place. Every day, $name would $verb around the neighborhood.";
    ?>
</body>
</html>