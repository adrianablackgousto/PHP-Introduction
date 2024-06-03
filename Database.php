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
    public function __construct($config, $username='root', $password='') {

        // $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";

        $dsn = 'mysql:' . http_build_query($config, '' ,';');
        $this->connection = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query($query, $id) {


        $statement = $this->connection->prepare($query);

        $statement->execute($id);

        return $statement;
    }
}
