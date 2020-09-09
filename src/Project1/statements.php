<?php

$a = 2;
$b = 2;

if($a>$b){
    echo "a jest wieksze od b";
} else if ($a <$b){
    echo "b jest wieksze od a";
} else {
    echo "liczby sa rowne";
}

while ($a <10):
    echo $a.PHP_EOL;
    $a++;
endwhile;


while ($b <20){
    $b++;
    echo "liczby ". $b.PHP_EOL;
}

for($c = 10;$c >0;$c--){

    echo $c.PHP_EOL;


}

for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i.PHP_EOL, $i++);

$list = array(1, 2, 3, 4);
foreach ($list as &$value) {
    echo $value.PHP_EOL;
}

