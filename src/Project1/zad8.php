<?php

/*8. Napisać funkcje sprawdzającą czy liczba jest liczbą pierwszą

function test(int $a) {
    // kod
}*/

test (97);

function test(int $a) {
    $counter =0;
    if($a >1){
        for($b=1;$b<=$a;$b++){
            if($a%$b == 0){
                $counter++;
            }
        }
    }
    if($counter == 2){
        echo $a." jest liczba pierwsza";
    }
}