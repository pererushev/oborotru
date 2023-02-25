<?php

    require_once 'Garden.php';

    $mysql = new mysqli('localhost', 'root', '', 'oborotru'); //db connection
    $trees = [
        'apples' => 10,
        'pears' => 15
    ];

    $garden = new Garden($mysql, $trees);


    echo 'собрано яблок: ' . $garden->apples . '<br>';
    echo 'собрано груш: ' . $garden->pears . '<br>';

    