<?php
declare(strict_types=1);
/*1. Mając listę liczb i liczbę k, zwróć, czy dowolne dwie liczby z listy sumują się do k.
przykład:
[10, 15, 3, 7] i liczba k = 17
zwróc true, ponieważ 10+7 = 17*/


$array = [10, 15, 3, 7];
$k = 17;

echo sumTest($array,$k);


function sumTest(array $array,int $k){

    foreach ($array as $linia => $item){

        foreach ($array as $linia2 => $item2){
            if($linia != $linia2){
                if(($array[$linia]+$array[$linia2]) == $k){

                    return "true";
                }
            }
        }
    }
}