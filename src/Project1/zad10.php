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

    foreach ($array as $linia => $item) {
        $liczba = 1;
        foreach ($array as $linia2 => $item2)  {
            if ($linia != $linia2) {
                if ($liczba == 1) {
                    $arrayNew[$linia] = 1;
                    $liczba++;
                }
                $arrayNew[$linia] = $arrayNew[$linia] * $array[$linia2];
            }
        }
    }
    return $arrayNew;
}