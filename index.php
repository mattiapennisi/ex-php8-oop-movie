<?php

class Movie
{
    use Rating;
    public $title;
    public $description;
    public $year;
    public $genreOne;
    public $genreTwo;
    public static $length = 'feature';

    public function __construct($title, $description, $year, Genre $genreOne, Genre $genreTwo)
    {
        $this->title = $title;
        $this->description = $description;
        $this->year = $year;
        $this->genreOne = $genreOne;
        $this->genreTwo = $genreTwo;
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

trait Rating {
    public $rating = 0;

    public function setRating($rating) {
        $this->rating = $rating;
    }

    public function getRating() {
        return $this->rating;
    }
}

$movieJaws = new Movie('Jaws', 'Nice movie', 1975, new Genre('Thriller', 'Suspenseful, tense, mysterious, fast-paced, dangerous'), new Genre('Drama', 'Emotional, realistic, character-driven, serious, impactful'));
$movieIntolerance = new Movie('Intolerance', 'Good old movie', 1916, new Genre('Drama', 'Emotional, realistic, character-driven, serious, impactful'), new Genre('Thriller', 'Suspenseful, tense, mysterious, fast-paced, dangerous'));

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

    ?>

</body>

</html>