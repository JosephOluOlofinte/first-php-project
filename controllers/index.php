<?php
require ('Database.php');


$heading = 'Home';


$db = new Database();
$posts = $db->query("SELECT * FROM posts")->fetchAll(PDO::FETCH_ASSOC);


require "views/index.view.php";