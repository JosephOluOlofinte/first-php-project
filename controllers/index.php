<?php
require ('Database.php');

$heading = 'Home';


$config = require('config.php');

$db = new Database($config['database']);
$posts = $db->query("SELECT * FROM posts")->fetchAll();


require "views/index.view.php";