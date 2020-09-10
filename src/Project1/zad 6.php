<?php

/*Stworzyć pętle która drukuje to co poniżej:

  *
 *   *
 *   *
 ***
 *   *
 *   *
 *   *
 *   *

 */

for ($a = 0; $a <6; $a++){
    if($a ==0){
        echo " *".PHP_EOL;
    }
    echo "*   *".PHP_EOL;
    if($a ==1){
        echo "***".PHP_EOL;
    }

}
