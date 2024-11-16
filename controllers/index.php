<?php

$_SESSION['name'] = 'Kim Harold';

view("index.view.php", [
    'heading' => 'Home',
]);