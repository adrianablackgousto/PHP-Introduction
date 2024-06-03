<?php
require "functions.php";
// require "router.php";

require "Database.php";

$config = require('config.php');

$db = new Database($config['database']);

$query = "SELECT * FROM posts where id = ? ";

$id = $_GET['id'];


$posts = $db->query($query, [$id])->fetch();

dieAndDump($posts);

// foreach ($posts as $post) {
//     echo "<li>" . $post['title'] . "</li>";
// }