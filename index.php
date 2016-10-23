<?php

    require __DIR__ . '/vendor/autoload.php';

    use Carbon\Carbon;
    use JpGraph\JpGraph;
    JpGraph::load();
    JpGraph::module('line');

    $numbers = Faker\Factory::create();

    for ($i=0; $i < 10; $i++) {
        $rate []= $numbers->randomFloat;
        $time []= $numbers->time;
    }

    $dt = Carbon::now()->toFormattedDateString();









?>