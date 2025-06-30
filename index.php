<?php

include_once('./traits/rating.php');
include_once('./models/movie.php');
include_once('./models/genre.php');
include_once('./db.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>

    <?php

    // var_dump($movies);

    ?>

    <div class="container-fluid">

        <h1 class="text-center mt-4">Movies list</h1>

        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-6 g-3 my-4">
            <?php

            foreach ($movies as $movie) {
                echo "
                    <div class='col'>
                        <div class='card' style='height: 350px; overflow: hidden;'>
                            <div class='card-body'>
                                <h4 class='card-title'>{$movie->title}</h4>
                                <p class='card-text'><small class='text-muted'>{$movie->year}</small></p>
                                <p class='card-text' style='height: 140px; overflow: hidden;'>{$movie->description}</p>
                                <div class='mb-2'>
                                    <span class='badge bg-primary me-1'>{$movie->genreOne->name}</span>
                                    <span class='badge bg-secondary'>{$movie->genreTwo->name}</span>
                                </div>
                                <p class='card-text'><strong>Rating: {$movie->rating}/10</strong></p>
                            </div>
                        </div>
                    </div>
                ";
            }

            ?>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</body>

</html>