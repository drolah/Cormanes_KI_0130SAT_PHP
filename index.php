<?php

require 'functions.php';
require 'Database.php';

$config = require('config.php');

$id = $_GET['id'];
$query = "select * from posts where id = :id";
$posts = $db->query($query, [':id' => $id])->fetch();

dd($posts);