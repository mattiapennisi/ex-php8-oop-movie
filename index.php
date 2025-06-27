<?php

class Movie
{
    public $title;
    public $description;

    public function __construct($title, $description)
    {

        $this->title = $title;
        $this->description = $description;
    }
};

class Genre {
    public $name;
    public $description;

    public function __construct ($name, $description) {
        $this->name = $name;
        $this->description = $description;
    }
}

$movieJaws = new Movie('Jaws', 'Nice movie');
$movieIntolerance = new Movie('Intolerance', 'Good old movie');



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
</head>

<body>
    <?php

    var_dump($movieJaws);
    var_dump($movieIntolerance);

    ?>
</body>

</html>