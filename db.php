<?php

require_once('./traits/rating.php');
require_once('./models/movie.php');
require_once('./models/genre.php');

$movieJaws = new Movie('Jaws', 'Nice movie', 1975, new Genre('Thriller', 'Suspenseful, tense, mysterious, fast-paced, dangerous'), new Genre('Drama', 'Emotional, realistic, character-driven, serious, impactful'));
$movieJaws->setRating(8);

$movieIntolerance = new Movie('Intolerance', 'Good old movie', 1916, new Genre('Drama', 'Emotional, realistic, character-driven, serious, impactful'), new Genre('Thriller', 'Suspenseful, tense, mysterious, fast-paced, dangerous'));
$movieIntolerance->setRating(9);

$movies = [
    $movieJaws,
    $movieIntolerance
];
