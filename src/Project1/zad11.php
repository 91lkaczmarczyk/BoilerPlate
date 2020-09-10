<?php
/*
Mając listę liczb całkowitych, napisz funkcję, która zwraca największą sumę liczb
niesąsiadujących. Liczby mogą być 0 lub ujemne.
Na przykład [2, 4, 6, 2, 5] powinno zwrócić 13, ponieważ wybieramy 2, 6 i 5. [5, 1, 1, 5]
powinno zwrócić 10, ponieważ wybieramy 5 i 5.
*/

$array = [5, 1, 1, 5];
($array);
foreach ($array as $linia =>$item){

    echo $linia." ".$item.PHP_EOL;

    foreach ($array as $linia1 =>$item1){
        if($linia != $linia1){
            if(($linia-$linia1) >1){

            }
        }
    }
}
