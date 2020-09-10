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

    for($a = 0;$a <sizeof($array);$a++){
        $liczba1 = $array[$a];
        for($b = 0;$b <sizeof($array);$b++){
            if($a !=$b){
                if(($array[$a]+$array[$b]) === $k){

                    return "true";
                }
            }
        }
    }
}