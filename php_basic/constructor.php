<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        class Book {
            var $title;
            var $author;
            var $pages;

            function __construct() {
                echo "A new book has been created.<br>";
            }
        }

        $book1 = new Book();
        $book1->title = "Harry Potter";
        $book1->author = "J.K. Rowling";
        $book1->pages = 400;

        class News {
            var $title;
            var $author;
            var $pages;

            function __construct($name) {
                echo $name;
            }
        }

        $book1 = new News("Ayerawady<br>");

        class Car {
            var $name;
            var $color;

            function __construct($aName, $aColor) {
                $this->name = $aName;
                $this->color = $aColor;
            }
        }

        $car1 = new Car("BMW", "Black");
        echo $car1->name;
        $car1->name="Toyota";
        echo $car1->name;
    ?>
</body>
</html>