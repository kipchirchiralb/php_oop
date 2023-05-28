<?php
require_once 'Book.php';
require_once 'PhysicalBook.php';
require_once 'DigitalBook.php';

$physicalBook = new PhysicalBook("Bird man", "albert k", 3000,12);

$digitalBook = new DigitalBook("Digi book", "john k", 2000,34533);

$plainBook = new Book("just a book ", "doris",900);
// $physicalBook->weight = 10; #works fine though
print $physicalBook->print(). '<br>';
print $digitalBook->getFileSize() . '<br>';
print $plainBook->print();

// inheritance fixes redundacy
// extends 1:30 - 1:46

