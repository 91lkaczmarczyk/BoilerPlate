<?php
declare(strict_types=1);

/*2. Mając tablicę liczb całkowitych, zwróć nową tablicę w taki sposób, że każdy element
o indeksie i nowej tablicy jest iloczynem wszystkich liczb w oryginalnej tablicy z wyjątkiem jednej w i.
Na przykład, jeśli nasze dane wejściowe to [1, 2, 3, 4, 5],
oczekiwany wynik to
[120, 60, 40, 30, 24].
Gdyby nasze dane wejściowe to [3, 2, 1], oczekiwany wynik wyniósłby [2, 3, 6].*/

$array = [1, 2, 3, 4, 5];

$arrayNew = iloczyn($array);
foreach ($arrayNew as $item) {
    echo $item . PHP_EOL;
}

function iloczyn($array): array
{
    $arrayNew = [];

    for ($a = 0; $a < sizeof($array); $a++) {
        $liczba = 1;
        for ($b = 0; $b < sizeof($array); $b++) {
            if ($a != $b) {
                if ($liczba == 1) {
                    $arrayNew[$a] = 1;
                    $liczba++;
                }
                $arrayNew[$a] = $arrayNew[$a] * $array[$b];
            }
        }
    }
    return $arrayNew;
}