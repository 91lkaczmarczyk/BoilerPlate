<?php
/*1. Napisać skrypt który posortuje tablice alfabetycznie i wyswietli wynik
Dane wejściowe:
$array = ['white', 'green', 'red'];
Wynik ma być:
 green, red, white
2. Napisać skrypt do usuwania elementów z tablicy po nazwie, oraz przywrócenie kluczą im kolejności
function deleteElement(array $array, string $name) {
    //kod
}

Przykład :
Dane wejściowe:
$array = [0 => 'white', 1 => 'green', 2 => 'red'];
usunięcie elementu 'green'
Dane wyjściowe:
$array = [0 => 'white', 1 => 'red'];
Array do zadania
    $a = [0 => 'aA', 1 => 'aa', 2 => 'Aa', 3 => 'AA', 4 => 0, 5 => 1, 6 => 2];
        usunąć element 'Aa';
        $a = [0 => 'aA', 1 => 'aa', 2 => 'AA', 3 => 0, 4 => 1, 5 => 2];
Aa*/


//zad 1

$array = ['white', 'green', 'red'];

asort($array);

foreach ($array as $item) {
    echo $item . ", ";
}


//zad 2

$array = [0 => 'white', 1 => 'green', 2 => 'red'];
$array = deleteElement($array, "green");
print_r($array);

$a = [0 => 'aA', 1 => 'aa', 2 => 'Aa', 3 => 'AA', 4 => 0, 5 => 1, 6 => 2];
$a = deleteElement($a,"Aa");
print_r($a);

function deleteElement(array $array, string $name)
{
    $array = array_merge(array_diff($array, array($name)));
    return $array;
}