<?php

require_once __DIR__.'./arrayClass.php';


$moviesArray = [];

foreach ($movies as $movie) {
    $moviesArray[] = [
        'title' => $movie->title,
        'genre' => $movie->genre,
        'dateRelease' => $movie->dateRelease,
        'description' => $movie->description,
    ];
}

prettyVarDump($moviesArray);

$jsonData = json_encode($moviesArray, JSON_PRETTY_PRINT);
file_put_contents('../data/movies.json', $jsonData);

echo $jsonData;

echo "Dati salvati in movies.json";

?>

