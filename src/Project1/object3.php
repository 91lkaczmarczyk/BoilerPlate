<?php




/**

Napisz klasę o nazwie SimpleCalculator. Klasa potrzebuje dwóch pól (zmiennych instancji) o nazwach firstNumber i secondNumber typu double.

Napisz następujące metody (metody instancji):

- Metoda o nazwie getFirstNumber bez żadnych parametrów, musi zwrócić wartość pola firstNumber.
- Metoda o nazwie getSecondNumber bez żadnych parametrów, musi zwrócić wartość pola secondNumber.
- Metoda o nazwie setFirstNumber z jednym parametrem typu double, wymaga ustawienia wartości pola firstNumber.
- Metoda o nazwie setSecondNumber z jednym parametrem typu double, wymaga ustawienia wartości secondNumberfield.
- Metoda o nazwie getAdditionResult bez żadnych parametrów, musi zwrócić wynik dodania wartości pól firstNumber i secondNumber.
- Metoda o nazwie getSubtractionResult bez żadnych parametrów, musi zwrócić wynik odjęcia wartości pola secondNumber od firstNumber.
- Metoda o nazwie getMultiplicationResult bez żadnych parametrów, musi zwrócić wynik pomnożenia wartości pól firstNumber i secondNumber.
- Metoda o nazwie getDivisionResult bez żadnych parametrów musi zwrócić wynik podzielenia wartości pola firstNumber przez secondNumber. W przypadku, gdy wartość secondNumber wynosi 0, wówczas zwraca 0.


 */

class SimpleCalculator{

    private  $firstNumber;
    private  $secondNumber;

    public  function __construct()  
    {
    }

    public  function getFirstNumber(){

        return $this->firstNumber;
    }
    public function getSecondNumber(){

        return $this->secondNumber;
    }
    public function setFirstNumber(float $firstNumber){
        $this->firstNumber = $firstNumber;
    }
    public function setSecondNumber(float $secondNumber){
        $this->secondNumber = $secondNumber;
    }
    public function getAdditionResult(){
        return $this->secondNumber + $this->firstNumber;
    }
    public function getSubtractionResult(){
        return $this->secondNumber - $this->firstNumber;
    }
    public function getMultiplicationResult(){
        return $this->secondNumber * $this->firstNumber;
    }
    public function getDivisionResult(){
        if ($this->secondNumber == 0){
            return 0;
        } else{
            return $this->firstNumber / $this->secondNumber;
        }

    }
}

$asd = new SimpleCalculator();
$asd->setFirstNumber(5.6);
$asd->setSecondNumber(0);
echo $asd->getAdditionResult().PHP_EOL;
echo $asd->getSubtractionResult().PHP_EOL;
echo $asd->getMultiplicationResult().PHP_EOL;
echo $asd->getDivisionResult().PHP_EOL;