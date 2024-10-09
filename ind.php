<?php
class Movie {
  public $title;
  public $genre;
  public $dateRelease;

  function __construct($title, $genre, $dateRelease){
    $this->title = $title;
    $this->genre = $genre;
    $this->dateRelease = $dateRelease;
  }
}

$titolo = new Movie('swagger', 'genere', 'ieri');

var_dump($titolo);

?>

