<?php

/// Zadanie
/// Uzupełnić kod klasy OneInstance, żeby metoda getInstance zawsze zwracała tą samą instancje
/// Uruchomienie Execute powinno zwrócić wynik Zadanie wykonane poprawnie
/// Zwróć uwagę, że kodu który ma komentarz //nie można modyfikować - nie możesz zmienić


class OneInstance
{

    private $variable;
    private static $instance = null;

    // nie można modyfikować
    private function __construct() // tworzy obiekt podstawowy
    {
    }

    public static function getInstance(): OneInstance
    {
        if(self::$instance == null) //wywołanie pola statycznego $instance i sprawdzenie czy równa się null
        {

            self::$instance = new self; // tworzy obiekt

        }

        return self::$instance; // zwraca pole statyczne $instance

    }

    /**
     * @return mixed
     */
    public function getVariable()
    {
        return $this->variable; //wywołanie wartości pola $variable
    }

    /**
     * @param mixed $variable
     */
    public function setVariable($variable): void
    {
        $this->variable = $variable; //przypisanie wartości polu $variable
    }

}

// Kodu poniżej nie można modyfikować


$class1 = OneInstance::getInstance(); //wywołanie metody statycznej
$class1->setVariable(10); //przypisanie zmiennej wartości 10


$class2 = OneInstance::getInstance();//wywołanie metody statycznej
$class2->setVariable(30); //nadpisanie zmiennej wartością 30



$class3 = OneInstance::getInstance();//wywołanie metody statycznej
$class3->setVariable(5);//nadpisanie zmiennej wartością 5



$class4 = OneInstance::getInstance();//wywołanie metody statycznej
$class4->setVariable(3); //nadpisanie zmiennej wartością 3



if ($class4->getVariable() === $class3->getVariable() && //wywołanie metody getVariable i porównanie zmiennych
    $class3->getVariable() === $class2->getVariable() &&
    $class2->getVariable() === $class1->getVariable()) {

    echo 'Zadanie wykonane poprawnie';

} else {
    echo 'Nie poprawnie, próbuj dalej';
}
