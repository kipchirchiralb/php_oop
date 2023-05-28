<?php
class Product
{
    public $price =  100;
    public $name =  'soap';
    // this method has a default arg val $ , makes the arg/param optional
    public function priceAsCurrency($divisor=100,$currencySymbol = '$')
    {
        return $currencySymbol . $this->price / $divisor;
    }
}

$prod = new Product();

//named variable to solve order of args when there are default values- php 8 +++
print $prod->priceAsCurrency(currencySymbol:'KSH') . PHP_EOL;

// Named Arguments