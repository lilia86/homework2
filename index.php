<?php

    require __DIR__ . '/vendor/autoload.php';

    $numbers = Faker\Factory::create();

    $limit = 10;

    for ($i = 0; $i < $limit; $i++) {
        $rate[]=$numbers->randomFloat;
        $time[]=$numbers->time;
    }



?>