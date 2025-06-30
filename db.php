<?php

require_once('./traits/rating.php');
require_once('./models/movie.php');
require_once('./models/genre.php');

$genreDrama = new Genre('Drama', 'Emotional, realistic, character-driven, serious, impactful');
$genreThriller = new Genre('Thriller', 'Suspenseful, tense, mysterious, fast-paced, dangerous');
$genreAction = new Genre('Action', 'Fast-paced, exciting, adrenaline-filled, physical, intense');
$genreComedy = new Genre('Comedy', 'Funny, lighthearted, humorous, entertaining, amusing');
$genreHorror = new Genre('Horror', 'Scary, frightening, terrifying, dark, suspenseful');
$genreRomance = new Genre('Romance', 'Romantic, passionate, emotional, loving, heartfelt');
$genreSciFi = new Genre('Sci-Fi', 'Futuristic, technological, imaginative, speculative, innovative');
$genreFantasy = new Genre('Fantasy', 'Magical, mythical, supernatural, imaginative, otherworldly');
$genreCrime = new Genre('Crime', 'Criminal, investigative, gritty, law-enforcement, underworld');
$genreWestern = new Genre('Western', 'Frontier, cowboy, rugged, lawless, desert');
$genreWar = new Genre('War', 'Military, conflict, heroic, intense, historical');
$genreDocumentary = new Genre('Documentary', 'Factual, informative, educational, real-life, investigative');

$movies = [
    new Movie('Jaws', 'Nice movie', 1975, $genreThriller, $genreAction),
    new Movie('Intolerance', 'Good old movie', 1916, $genreDrama, $genreRomance),
    new Movie('The Godfather', 'Epic crime saga', 1972, $genreDrama, $genreCrime),
    new Movie('Pulp Fiction', 'Nonlinear narrative masterpiece', 1994, $genreThriller, $genreCrime),
    new Movie('The Shawshank Redemption', 'Story of hope and friendship', 1994, $genreDrama, $genreThriller),
    new Movie('Casablanca', 'Classic wartime romance', 1942, $genreRomance, $genreWar),
    new Movie('The Dark Knight', 'Batman versus Joker', 2008, $genreAction, $genreThriller),
    new Movie('Schindler\'s List', 'Holocaust drama', 1993, $genreDrama, $genreWar),
    new Movie('Goodfellas', 'Mafia life story', 1990, $genreCrime, $genreDrama),
    new Movie('The Silence of the Lambs', 'Psychological thriller', 1991, $genreThriller, $genreHorror),
];

$movies[0]->setRating(8);
$movies[1]->setRating(9);
$movies[2]->setRating(9.2);
$movies[3]->setRating(8.9);
$movies[4]->setRating(9.3);
$movies[5]->setRating(8.5);
$movies[6]->setRating(9.0);
$movies[7]->setRating(8.9);
$movies[8]->setRating(8.7);
$movies[9]->setRating(8.6);
