<?php

$date = new DateTimeImmutable('2021-01');
for($i = 0; $i < 19; $i++){
    echo 'php artisan ViewCreator ENCOUNTERS ' . $date->format('Ym') . ' --isAutoLoadDisabled && \\' . PHP_EOL;
    $date = $date->add(new DateInterval('P1M'));
}