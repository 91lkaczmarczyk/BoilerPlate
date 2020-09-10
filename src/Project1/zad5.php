<?php

/*
 4. Stworzyć pętle for która wydrukuje to co poniżej:

*
* *
* * *
* * * *
* * * * *

5. Stworzyć pętle for która wydrukuje to co poniżej

*
* *
* * *
* * * *
* * * * *
* * * *
* * *
* *
*

co można zrobić:
 for (// kod) {
 for (// kod) {
   	//kod
   }
   // kod
 }

czego nie można zrobić:
	for (//kod) {

	}

	for (//kod) {

	}*/

// zad 4

$stars = '* ';

for ($a = 0; $a < 5; $a++) {
    echo $stars . PHP_EOL;
    $stars = $stars . '* ';
}

echo PHP_EOL;
//zad 5


$stars2 = '';
for ($a = 0; $a < 5; $a++) {
    $stars2 = $stars2 . '* ';
    echo $stars2 . PHP_EOL;

    if ($a == 4) {
        for ($b = 4; $b > 0; $b--) {
            $stars2 = substr($stars2, 0, -2);
            echo $stars2 . PHP_EOL;

        }
    }
}
