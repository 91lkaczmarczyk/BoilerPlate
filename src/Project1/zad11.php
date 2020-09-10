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
    $excl = 0;
    $incl = $array[0];
    for ($i = 1; $i < sizeof($array) ;$i++)
    {
        $temp = $incl;
        $incl = max(max($excl + $array[$i], $array[$i]), $incl);
        $excl = $temp;
    }
    return $incl;
}



/*foreach ($array as $linia =>$item){

    echo $linia." ".$item.PHP_EOL;

    if(sizeof($array)== 3){

        echo $array[0]+$array[2];
    } else if(sizeof($array)== 4){


    }

    foreach ($array as $linia1 =>$item1){
        if($linia != $linia1){
            if(($linia-$linia1) >1){

            }
        }
    }
}*/
