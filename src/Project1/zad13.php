<?php
declare(strict_types=1);
/*Mając tablicę liczb całkowitych i liczbę k, gdzie 1 <= k <= długość tablicy, oblicz maksymalne wartości każdej podtablicy o długości k.
Na przykład, mając tablicę = [10, 5, 2, 7, 8, 7] i k = 3, otrzymamy: [10, 7, 8, 8], ponieważ:
10 = maks. (10, 5, 2)
7 = maks. (5, 2, 7)
8 = maks. (2, 7, 8)
8 = maks. (7, 8, 7)
napisać funkcje która przyjmuje 2 wartości tablie i długość i zwraca tablice*/
$tab = [10, 5, 2, 7, 8, 7];
$k = 3;



$array2 = maxiTab2($tab,$k);

foreach ($array2 as $item){
    echo  $item.PHP_EOL;
}
function maxiTab(array $tab, int $k):array
{
    $tabNew = [];
    for($a = 0;$a<sizeof($tab)-$k+1;$a++){
        $array =[];
        for($b = 0;$b <$k;$b++){
            $array[$b]=$tab[$a+$b];
        }

        $tabNew[$a] = max($array);
    }
return $tabNew;
}
function maxiTab2(array $tab, int $k):array
{
    $tabNew = [];
    $liczba = 0;
    $liczba2= 0;
    foreach ($tab as $item){

        if($liczba<$k-1){
            $array[$liczba] = $item;
            $liczba++;
        }
        else if($liczba == $k){
            $array[$liczba] = $item;
            $tabNew[$liczba2] = max($array);
            $liczba2++;
        }
    }
return $tabNew;


}

/*function maxNew(array $tab, int $k):array{
$array = [];
for($a = 0; $a<sizeof($tab)-2;$a++){

    $abc = $tab[$a];
    $l = 0;
    $aa =$a+1;
    echo "pierwsza".$abc.PHP_EOL;
    while ($l <2){
        echo "druga".$tab[$aa].PHP_EOL;
        echo "trzecia".$aa.PHP_EOL;
    if($tab[$aa]>$abc){

        $abc = $tab[$aa];
        $l++;
        $aa++;
    }
        $l++;
        $aa++;
}

    $array[$a] = $abc;

}
return $array;

}*/

