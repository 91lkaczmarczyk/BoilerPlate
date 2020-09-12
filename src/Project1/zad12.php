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



    $g = explode('\n',$string);





function longestPath($string){
    $r = 0;
    $array = array(0,0);
    $b = explode('\n',$string) ;
    foreach ($b as $items){
        $l = strRpos($items, '\t');
        echo $l.PHP_EOL;
    }



}




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




