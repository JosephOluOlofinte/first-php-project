<?php

$heading = 'Home';

//connect to Mysql db

//initialize PDO by creating a new instance of it
$dsn = "mysql:host=localhost;port=3306;dbname=first-php-project;charset=utf8mb4";
$pdo = new PDO($dsn, 'root');

$statement = $pdo->prepare("SELECT * FROM posts");
$statement->execute();

$posts = $statement->fetchAll(PDO::FETCH_ASSOC);

require "views/index.view.php";