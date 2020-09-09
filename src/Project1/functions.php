<?php
declare(strict_types=1);

/*1. Napisać funkcje przyjmującą dwa argumenty integery, zwracająca wynik true jeżeli któryś z argumentów równy jest 30 lub ich suma równa się 30.
 function test(int $a, int $b): bool {
     //kod
 }
 Jak mają wyglądać wyniki zadania:
 30, 0 wynik true,
 25, 5 wynik true,
 20,30 wynik true,
 20,25 wynik false*/


function test(int $a, int $b): bool {

    $suma = $a + $b;
    if($suma == 30){
        return true;
    } else if ($a == 30){
        return true;
    }else if ($b == 30){
        return true;
    } else {
        return false;
    }


  //  return  - zrobic w 1 lini

}

function test2($a, $b) {

    $sum = $a + $b;

    return $sum == 30 || $a ==30 || $b == 30;


}



echo test( 30, 0).PHP_EOL;
echo test(25, 5  ).PHP_EOL;
echo test( 20,30).PHP_EOL;
echo test(20,25 ).PHP_EOL;

echo test2( 30, 0).PHP_EOL;
echo test2(25, 5  ).PHP_EOL;
echo test2( 20,30).PHP_EOL;
echo test2(20,25 );