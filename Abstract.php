<?php 

// abstract classes do not allow you to instantiate classes but allows new class extension from them (inheritance) -- THIS IS CALLED AN INTERFACE

// CREATING AN INTERFACE

use PhysicalBook as GlobalPhysicalBook;

abstract class Book
{
    public $title;
    public $weight;
    public function __construct(string $title, int $weight =0)
    {
       $this->title = $title; 
       $this->weight = $weight; 
    }

    public function print():void
    {
        print 'Title: '.$this->title . "<br> Weight: ". $this->weight;
    }
    // Abstract Method -- must be implemented by subclasses
    abstract public function write():string;
}

// instantiating an object
// $book1 = new Book('Yesterday', 90);#Cannot instantiate abstract class Book
// $book1->print();

class PhysicalBook extends Book
{
    public $author;
    public function __construct(string $title, int $weight, string $author)
    {
        // calling parent constructor using scope resolution operator
        parent::__construct($title, $weight);
        $this->author = $author;        
    }

    public function write():string
    {
        return 'Title: '.$this->title . "<br> Weight: ". $this->weight . '<br> Author: '.$this->author ;
    }

}

$book2 = new PhysicalBook('Tomorow Land', 34, "Thomas Chandler");

print $book2->write();

