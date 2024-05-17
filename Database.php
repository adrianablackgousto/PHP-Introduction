<?php

//Connect to our MySQL database
//PDO php data objects

//initialize PDO

//class Person {
//    public $name;
//    public $age;
//    public function breathe() {
//        echo "breathing";
//    }
//}
//
//$person = new Person();
//$person ->name ='Adriana';
//$person ->age = 25;
//
//dieAndDump($person);


//Connect to the database and execute a query

class Database {

    public $connection;
    public function __construct() {
        $dsn = "mysql:host=127.0.0.1;port=3306;dbname=myapp;charset=utf8mb4";

        $this->connection = new PDO($dsn, 'root', '');
    }

    public function query($query) {


        $statement = $this->connection->prepare($query);
        $statement->execute();
        return $statement;
    }
}

$db = new Database();
$posts = $db->query("SELECT * FROM posts;")->fetchAll(PDO::FETCH_ASSOC);;

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}