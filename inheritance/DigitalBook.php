<?php

require_once 'Book.php';

class DigitalBook extends Book 
{
    public $fileSize;

    public function __construct(string $title, string $author, int $price, int $fileSize = 0 ){
        // calling the parent constructor using scope resolution operator
        parent::__construct($title,$author,$price);
        $this -> fileSize = $fileSize;
      
    }

    public function getFileSize(): int
    {
        return $this->fileSize;
    }
    // methods with the same name in the child caass s those in the parrent class overrides the parent methods
    // a parent however knows nothing about the child class
    public function print():string
    {
        $string = "{$this->title},{$this->author},FileSize: {$this -> fileSize} ";
        return $string;
    }
}