<?php 

//connect to Mysql db

class Database {

    public $connection;

    public function __construct() {

        //initialize PDO by creating a new instance of it
        $dsn = "mysql:host=localhost;port=3306;dbname=first-php-project;charset=utf8mb4";

        $this->connection = new PDO($dsn, 'root');
    }

    public function query($query) {



        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement;

    }
}