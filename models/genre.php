<?php 

include_once('./traits/rating.php');
include_once('./models/movie.php');

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

?>