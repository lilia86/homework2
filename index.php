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

   $graph = new Graph(400, 300, 'auto', 10, true);
   $graph->SetScale('textlin');
   $lineplot = new LinePlot($rate, $time);
   $lineplot->SetColor('forestgreen');
   $graph->Add($lineplot);
   $graph->title->Set($dt);








?>