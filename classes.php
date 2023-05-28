<?php

class Product
{
   public $name = 'soap'; 
   public $price;
}

$soapObj = new Product();

$soapObj -> name = "toothpasete";
$soapObj -> price = 50;

print $soapObj -> name . "\n";
print $soapObj -> price;

// constructor function
