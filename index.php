<?php

class Movie
{
    public $title;
    public $description;
    public $year;

    public function __construct($title, $description, $year)
    {

        $this->title = $title;
        $this->description = $description;
        $this->year = $year;
    }

    public function getDescription()
    {
        return $this->description;
    }
};

class Genre
{
    public $name;
    public $description;

    public function __construct($_name, $_description)
    {
        $this->name = $_name;
        $this->description = $_description;
    }
}

$movieJaws = new Movie('Jaws', 'Nice movie', 1975);
$movieIntolerance = new Movie('Intolerance', 'Good old movie', 1916);

$jawsDescription = $movieJaws->getDescription();

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

    var_dump($jawsDescription);

    ?>

</body>

</html>