<?php

class Product
{
    public $name = 'soap';
    public $price ; #cents

    public function priceAsCurreny()
    {
        $priceAsCurrency = $this->price / 100;
        return number_format($priceAsCurrency,2);
    }
}

$soapObj = new Product();
$soapObjTwo = new Product();
$soapObj->price = 550;
$soapObjTwo->price = 650;
// $priceAsCurrency = $soapObj->priceAsCurreny();
$priceAsCurrency = $soapObjTwo->priceAsCurreny();

var_dump($priceAsCurrency) . PHP_EOL;