<?php

class Book  
{
    public $title;
    public $author;
    public $price;
  

    public function __construct(string $title, string $author, int $price, int $weight = 0, int $fileSize = 0 ){
        $this -> title = $title;
        $this -> author = $author;
        $this -> price = $price;
    
    }

    public function getTitle(): string
    {
        return $this->title;
    }
    public function getAuthor(): string
    {
        return $this->author;
    }
    public function getPrice(): int
    {
        return $this->price;
    }
    public function getPriceAsCurrency():float
    {
        return $this->price/130;
    }
    public function print():string
    {
        $string = "{$this->title},{$this->author}";
        return $string;
    }


}