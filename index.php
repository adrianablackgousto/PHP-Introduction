<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Demo</title>
  <style>
    div {
      display: grid;
      place-items: center;
      height: 100vh;
      margin: 0;
      font-family: sans-serif;
    }
  </style>
</head>


<body>
  <h1>
    <?php
    $greeting = "Hey dude hey";
    //concatenate
    echo $greeting . " " . "world";
    ?>
  </h1>

  <h2>
    <?php
    echo "$greeting this is a non concat string without space issues"

    ?>

  </h2>
  <p>
    <?php
    echo "Lorem hello hi yea this is a paragraph for us to read"; ?>
  </p>


  <div>
    <!-- Conditions in PHP -->
    <?php
    $name = "Dark Matter";
    $read = true;

    if ($read) {
      $message = "You have read $name.";
    } else {
      $message = "You have not read $name.";
    }

    ?>

    <h1>

      <?php echo $message; ?>

      <!-- Short form of prining a string -->
      <?= $message ?>
    </h1>

  </div>

  <!-- Handling Arrays -->
  <?php
  $books = [
    "Do Androids Dream of Electric Sheep",
    "The Langoliers",
    "Hail Mary",
  ]
  ?>

  <h1>Recommended Books</h1>
  <!-- Using curly brackets -->
  <ul>
    <?php foreach ($books as $book) {
      echo "<li>$book</li>";
    }
    ?>
  </ul>

  <!-- Short had to provide views/ fragments -->
  <ul>
    <?php foreach ($books as $book) : ?>
      <!-- short hand -->
      <li><?= $book; ?></li>
    <?php endforeach; ?>
  </ul>


  <h1>Arrays</h1>

  <p>Select Item of a list</p>
  <?= $books[1] ?>

  <h2>Associative Arrays</h2>
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

  ]
  ?>
  <!-- Looping 2d array -->
  <?php foreach ($books as $book) : ?>
    <!-- for displaying two variable within the same array you need to 
  open new php braces -->

    <!-- /**Why the parentheses? */ -->
    <li><?= $book['name'] ?> (<?= $book['releaseYear'] ?>)</li>
  <?php endforeach; ?>


  <h1>Functions</h1>
  <h2>Printed using conditions </h2>

  <!-- Filter array with books only written by Andy Weir using conditions -->
  <?php foreach ($books as $book) :  ?>
    <?php if ($book['author'] === 'Andy Weir') : ?>
      <li><?= $book['name'] ?></li>
    <?php endif; ?>

  <?php endforeach; ?>

  <?php
  function filterByAuthor($books)
  {
    $filteredBooksArray = [];

    foreach ($books as $book) {

      if ($book['author'] === 'Andy Weir') {
        $filteredBooksArray[] = $book;
      }
    }

    return $filteredBooksArray;
  }

  ?>

  <h2>Printed using filter array function </h2>
  <ul>
    <?php foreach (filterByAuthor($books) as $book) : ?>
      <li><?= $book['name'] ?></li>
    <?php endforeach; ?>
  </ul>


</body>

</html>