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
   $graph->title->SetFont(FF_ARIAL, FS_NORMAL);
   $graph->xaxis->title->SetFont(FF_VERDANA, FS_ITALIC);
   $graph->yaxis->title->SetFont(FF_TIMES, FS_BOLD);
   $graph->xaxis->title->Set('Time point');
   $graph->yaxis->title->Set('Rate point');
   $graph->xaxis->SetColor('#СС0000');
   $graph->yaxis->SetColor('#СС0000');
   $lineplot->SetWeight(3);
   $lineplot->mark->SetType(MARK_FILLEDCIRCLE);
   $lineplot->value->Show();
   $graph->SetBackgroundGradient('orange', 'ivory');
   $graph->SetShadow(4);
   $graph->Stroke();









?>