<?php

require 'functions.php';

$dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;charset=utf8mb4";

$pdo = new PDO($dsn);

$statement = $pdo->prepare("select * from posts where id = 1");
$statement->execute();

$post = $statement->fetch(PDO::FETCH_ASSOC);

echo "<li>" . $post['title'] . "</li>";