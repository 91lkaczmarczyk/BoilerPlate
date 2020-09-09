<?php

// stworzyc talbice z markami samochodow, 5 marek i wyswietlic wszystkie ktorych nazwa zaczyna sie na "b"

$list = ["bMW", "Mercedes", "Audi", "Bentley", "Fiat"];
$list2 = $list;

foreach ($list as $item) {

    $item = ucfirst($item);

    if (substr($item,0,1) == "B"){
        echo $item.PHP_EOL;
    }

}


if ($list === $list2) {
    echo "ok";
}
