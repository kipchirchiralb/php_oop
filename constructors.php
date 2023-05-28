<?php

class Product
{
    // public $price =  100;
    // public $name =  'soap';

    // public function __construct($name='bread', $price=60)
    // {
    //     $this->name = $name;
    //     $this->price = $price;
    // }

    public function __construct(public $name = 'Soap', public $price = 120)
    {
        
    }
    // this method has a default arg val $ , makes the arg/param optional
    public function priceAsCurrency($divisor=100,$currencySymbol = '$')
    {
        return $currencySymbol . $this->price / $divisor;
    }
}

$soap = new Product(price:70); #named argument - price  to avoid overwriting the default value for name

var_dump($soap->price);
var_dump($soap->name);