<?php 

require_once 'Book.php';


class PhysicalBook extends Book
{
   
    public $weight;
    // a constructor in the child class overwrites the constructor in the parent class -- > solution: call parent constructor in the child constructor using scope resolution operator ::
    public function __construct(string $title,string $author, int $price, int $weight = 0){
        parent::__construct($title,$author,$price);
        $this -> weight = $weight;
    }

    public function getWeight(): int
    {
        return $this->weight;
    }

    public function print():string
    {
        $string = "{$this->title},{$this->author}, Weight: {$this -> weight}";
        return $string;
    }
    
}