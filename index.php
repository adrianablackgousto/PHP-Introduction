<?php
$books = [
    [
        'name' => 'Do Androids Dream of Electric Sheep',
        'author' => 'Philip K. Dick',
        'purchaseUrl' => 'www.example.com',
        'releaseYear' => 2006
    ],
    [
        'name' => 'The Langoliers',
        'author' => 'Andy Weir',
        'purchaseUrl' => 'www.example.com',
        'releaseYear' => 2003,
    ],
    [
        'name' => 'Hail Mary',
        'author' => 'HM author',
        'purchaseUrl' => 'www.example.com',
        'releaseYear' => 2010,
    ],
    [
        'name' => 'The Martian',
        'author' => 'Andy Weir',
        'purchaseUrl' => 'www.example.com',
        'releaseYear' => 2011,
    ],

];

  $favoriteMovies = [
    [
      'title' => 'Grease',
      'releaseDate' => 1978,
        'url' => 'www.google.com',
    ],
    [
      'title' => 'The Goonies',
      'releaseDate' => 1985,
        'url' => 'www.google.com',
    ],
    [
      'title' => 'Mean Girls',
      'releaseDate' => 2005,
        'url' => 'www.google.com',
    ],
    [
      'title' => 'Inception',
      'releaseDate' => 2010,
        'url' => 'www.google.com',
    ],
  ];



$filteredBooksArrayVariable = array_filter($books, function($book) {
    return $book['releaseYear'] > 1950 && $book['releaseYear'] <= 2020;
});

require 'index.view.php';