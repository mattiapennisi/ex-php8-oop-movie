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

?>