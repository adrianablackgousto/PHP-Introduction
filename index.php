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
  <ul>
    <?php foreach($books as $book) {
      echo "<li>$book</li>";
    }
    ?>
  </ul>

</body>

</html>