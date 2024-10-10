<?php

class Movie {
  public string $title;
  public array $genre;
  public string $dateRelease;
  public string $description;

  function __construct(string $title, string $dateRelease, string $description, array $genre = []) {
    $this->title = $title;
    $this->genre = $genre;
    $this->dateRelease = $dateRelease;
    $this->description = $description;
  }

  public function getInfo() {
    return [
      'title' => $this->title,
      'release date' => $this->dateRelease,
      'genre' => $this->genre,
      'description' => $this->description
    ];
  }
}

function prettyVarDump($var) {
    echo '<pre style="background: #f4f4f4; border: 1px solid #ccc; padding: 10px; border-radius: 5px; font-size: 14px; line-height: 1.5;">';
    var_dump($var);
    echo '</pre>';
}



?>
