<?php

// Wyświetl wszystkie samochody które są starsze niż 2017 rok i miesiąc 12

$bmw = [
    'name' => 'BMW',
    'engine' => 2.0,
    'year' => 2017,
    'month' => 3
];
$mercedes = [
    'name' => 'Mercedes',
    'engine' => 2.3,
    'year' => 2020,
    'month' => 6
];
$audi = [
    'name' => 'Audi',
    'engine' => 1.9,
    'year' => 2005,
    'month' => 11
];
$bentlay = [
    'name' => 'Bentlay',
    'engine' => 3.0,
    'year' => 2016,
    'month' => 10
];
$fiat = [
    'name' => 'Fiat',
    'engine' => 1.0,
    'year' => 2010,
    'month' => 1
];

$list = [
    $bmw, $mercedes, $audi, $bentlay, $fiat
];

foreach ($list as $item) {

    $name = $item['name'];
    $engine = $item['engine'];
    $year = $item['year'];
    $month = $item['month'];


    if ($year < 2017) {
        //echo '{ ' . "'" . 'name' . "': " . "'" . $name . "'" . ", '" . 'engine' . "': " . "'" . $engine . "'" . ", '" . 'year' . "': " . "'" . $year . "'" . ", '" . 'month' . "': " . "'" . $month . "'" . ' }' . PHP_EOL;
        echo json_encode($item).PHP_EOL;
    } else if ($year == 2017 && $month < 2) {

        echo json_encode($item).PHP_EOL;

    }

    /*    var_dump($item);*/


}







