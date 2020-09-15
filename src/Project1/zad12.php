<?php
declare(strict_types=1);
/**
 *
 * ciąg "dir\n\tsubdir1\n\t\tfile1.txt\n\t\tsubsubdir1\n\tsubdir2\n\t\tsubsubdir2\n\t\t\tfile2.txt"
 *
 * wygląda następująco:
 *
 * dir
 * subdir1
 * file1.ext
 * subsubdir1
 * subdir2
 * subsubdir2
 * file2.ext
 *
 * Katalog dir zawiera dwa podkatalogi subdir1 i subdir2. subdir1 zawiera plik file1.txt i
 * pusty podkatalog drugiego poziomu subsubdir1. subdir2 zawiera podkatalog drugiego
 * poziomu subsubdir2 zawierający plik file2.txt.
 *
 * Interesuje nas znalezienie najdłuższej (liczby znaków) bezwzględnej ścieżki do
 * pliku w naszym systemie plików. Na przykład w drugim przykładzie
 * powyżej najdłuższą ścieżką bezwzględną jest
 * "dir/subdir2/subsubdir2/file2.txt", a jej długość to 32.
 *
 * Zwróc najdłuższą ścieżke oraz jej długość
 * Jeśli w systemie nie ma pliku, zwróć 0.
 */
// strlen(string) - Funkcja zwraca ilośc znaków w ciągu.
//strstr(string) - zwraca ciag od wskazanego tekstu
//str_replace() - wyrażenie regularne służy do zamiany, podmiany ciągu znaków wyrazów,
// wprowadzamy trzy wartości.

$string = "dir\n\tsubdir1\n\t\tfile1.txt\n\t\tsubsubdir1\n\tsubdir2\n\t\tsubsubdir2\n\t\t\tfile2.txt";

longestPath($string);

function longestPath($string)
{
    $string2 = explode("\n", $string);
    $board[0] = 0;
    $stringA = '';
    $stringLong = "";
    $counter = 0;

    foreach ($string2 as $items) {
        $level = strRpos($items, "\t")+1;
        if (1 == $level) {
            $stringA = $paste = substr($string,0,strpos($string,"\n"));
        }
        if (strpos($items, ".")) {
            $stringA = $stringA."/" . $items;
            $counter++;
            if ($counter == 0) {
                $stringLong = $stringA;
            }
            if (strlen($stringA) > strlen($stringLong)) {
                $stringLong = $stringA;
            }
        } else {
            $stringA = $stringA ."/". $items;
        }
    }

    $stringLong = str_replace("\t", "", $stringLong);
    echo "path: ".$stringLong . " length: ".strlen($stringLong);

}





/*{
    $r = 0;
    $array = [];
    $paste = substr($string,0,strpos($string,"\n"));
    $string = strstr($string,"\n");
    $b = explode("\n", $string);
    foreach ($b as $items) {

        $l = strRpos($items, "\t");




        if($l == 0){
            $array[0] = $array[0].$items;
            echo "to jest 0: ".$l . PHP_EOL;
        }else if ($l == 1){
            $array[1] = $array[1].$items;
            echo "to jest 1: ".$l.PHP_EOL;
        }else{
            $array[2] = $array[2].$items;
            echo "to jest reszta: ".$l.PHP_EOL;
        }
    }
    var_dump($array);
}*/


/*
$string = str_replace("\n", "/", $string);
$string = str_replace("\t", "", $string);
$string2 = strstr($string, '.txt');
$delete = str_replace(".txt/", "/", $string2);
$string1 = str_replace($delete, "", $string);
$string2 = str_replace(".txt/", "dir/", $string2);

if (strlen($string1) > strlen($string2)) {
    echo "Ścieżka: " . '"' . ($string1) . '"' . ", długość: " . strlen($string2).PHP_EOL;
    //echo var_dump($string1);
    if(file_exists($string1)){
        echo 1;
    } else{
        echo 0;
    }
} else if (strlen($string1) < strlen($string2)) {
    echo "Ścieżka: " . '"' . ($string2) . '"' . ", długość: " . strlen($string2).PHP_EOL;
    //echo var_dump($string2);
    if(file_exists($string2)){
        echo 1;
    }else {
        echo 0;
    }
}*/




