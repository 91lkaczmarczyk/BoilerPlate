<?php
/*Utwórz klasę o nazwie Car z konstruktorem, który odbierze markę i rok samochodu, oraz funkcją o nazwie getDetails, która drukuje szczegóły samochodu.

Na przykład w przypadku samochodu Toyota z 2006 r. Wydrukowany zostanie następujący wiersz:

Ten samochód to Toyota z 2006 roku.*/
class Car
{
    private $brand;
    private $years;

    public function __construct($brand, $years)
    {
        $this->brand = $brand;
        $this->years = $years;
    }


    public function getDetails()
    {
        echo "Ten samochód to " . $this->brand . " z " . $this->years . " roku" . ".\n";
    }
}
$toyota = new Car("Toyota", "2006");
$toyota ->getDetails();

