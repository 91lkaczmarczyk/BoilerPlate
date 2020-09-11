<?php
/*
Mając listę liczb całkowitych, napisz funkcję, która zwraca największą sumę liczb
niesąsiadujących. Liczby mogą być 0 lub ujemne.
Na przykład [2, 4, 6, 2, 5] powinno zwrócić 13, ponieważ wybieramy 2, 6 i 5. [5, 1, 1, 5]
powinno zwrócić 10, ponieważ wybieramy 5 i 5.
*/

$array = [2, 4, 6, 2, 5];

echo maxSum($array);

function maxSum($array)
{
    $fir = 0;
    $sec = $array[0];
    for ($i = 1; $i < sizeof($array) ;$i++)
    {
        $thr = $sec;
        $sec = max(max( $fir  + $array[$i], $array[$i]), $sec);
        $fir  = $thr;
    }
    return $sec;
}

?>