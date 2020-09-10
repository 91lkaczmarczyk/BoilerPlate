<?php

/*7. Napisać funkcje przyjmującą jeden argument integer, sprawdzający czy liczba jest podzielna przez 3 lub 7.

function test(int $a) {
    //kod
}*/

test(70);

function test(int $a) {

    if($a%3 == 0){
        echo $a. "jest podzielne przez 3";
    } else if($a%7 == 0){
        echo $a. " jest podzielne przez 7";
    }


}