<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="switch_statement.php" method="post">
            What is your grade? <input type="text" name="grade" placeholder="Enter your grade">
            <input type="submit" value="Submit">
    </form>
    <?php
        $grade = $_POST['grade'];
        switch($grade){
            case "A":
                echo "You did amazing!";
                break;
            case "B":
                echo "You did pretty good!";
                break;
            case "C":
                echo "You did well!";
                break;
            case "D":
                echo "You passed!";
                break;
            case "F":
                echo "You failed!";
                break;
            default:
                echo "Invalid grade!";
        }
    ?>
</body>
</html>