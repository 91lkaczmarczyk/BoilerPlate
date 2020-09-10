<?php

/*3. Napisać skrypty do sortowania:

a) rosnąco po wartości tablicy
b) rosnąco po kluczy tablicy
c) malejąco po wartości tablicy
d) malejąco po wartości tablicy

przykładowy array:

$array = [3 => 'a', 4 => 'b',2 => 'd', 1 => 'c'];

wyniki sortowań:

a) [3 => 'a', 4 => 'b', 1 => 'c', 2 => 'd']
b) [1 => 'c', 2 => 'd', 3 => 'a', 4 => 'b']
c) [2 => 'd', 1 => 'c', 4 => 'b', 3 => 'a']
d) [4 => 'b', 3 => 'a', 2 => 'd', 1 => 'c']*/

// a)

$array = [3 => 'a', 4 => 'b',2 => 'd', 1 => 'c'];

asort($array);
echo "a) rosnąco po wartości tablicy ";
print_r($array);

// b)

ksort($array);
echo  "b) rosnąco po kluczu tablicy ";
print_r($array);

// c)

arsort($array);
echo  "c) malejąco po wartości tablicy ";
print_r($array);

// d)

krsort($array);
echo  "d) malejąco po wartości tablicy "; // tutaj chyba chodzilo ze malejaco po kluczu?
print_r($array);
