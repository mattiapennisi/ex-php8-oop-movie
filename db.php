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
    new Movie('Jaws', 'A giant shark terrorizes a beach town during summer season, creating panic among tourists and locals alike.', 1975, $genreThriller, $genreAction),
    new Movie('Intolerance', 'Four interconnected stories spanning different time periods explore themes of prejudice, love, and human intolerance throughout history.', 1916, $genreDrama, $genreRomance),
    new Movie('The Godfather', 'An aging patriarch of an organized crime dynasty transfers control to his reluctant son Michael Corleone.', 1972, $genreDrama, $genreCrime),
    new Movie('Pulp Fiction', 'Two hitmen, a boxer, and a gangster\'s wife interweave in this nonlinear tale of crime and redemption.', 1994, $genreThriller, $genreCrime),
    new Movie('The Shawshank Redemption', 'A banker wrongly convicted of murder finds hope and friendship during his decades in Shawshank State Penitentiary.', 1994, $genreDrama, $genreThriller),
    new Movie('Casablanca', 'An American expatriate in Morocco must choose between love and virtue during World War II occupation.', 1942, $genreRomance, $genreWar),
    new Movie('The Dark Knight', 'Batman faces his greatest challenge yet when the Joker wreaks havoc and chaos on Gotham City.', 2008, $genreAction, $genreThriller),
    new Movie('Schindler\'s List', 'A German industrialist saves over a thousand Polish Jews during the Holocaust by employing them in factories.', 1993, $genreDrama, $genreWar),
    new Movie('Goodfellas', 'The rise and fall of mob associate Henry Hill and his friends in the Lucchese crime family.', 1990, $genreCrime, $genreDrama),
    new Movie('The Silence of the Lambs', 'A young FBI cadet seeks help from imprisoned cannibal Hannibal Lecter to catch another serial killer.', 1991, $genreThriller, $genreHorror),
    new Movie('Forrest Gump', 'A simple man with a low IQ witnesses and influences several defining historical events in America.', 1994, $genreDrama, $genreComedy),
    new Movie('The Matrix', 'A computer hacker discovers reality is a simulation and joins a rebellion against the machines controlling humanity.', 1999, $genreSciFi, $genreAction),
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
$movies[10]->setRating(8.8);
$movies[11]->setRating(8.7);
