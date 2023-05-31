<?php
class Song 
{
    public string $name;
    public int $numberOfPlays;

    /**
     * song rating from 0 to 5
     * Half ratings allowed e.g. 3.5
     */
    private int|float $rating;

    public function __construct(string $name,int $numberOfPlays)
    {
        $this -> name = $name;
        $this -> numberOfPlays = $numberOfPlays;
    }

    public function setRating(int|float $num ):void
    {
        // max, min functins
        $num = max(0,$num);
        $this->rating = min(5,$num);
        // if($num<0){
        //     $this->rating = 0;
        // }elseif($num>5){
        //     $this->rating = 5;
        // }else{
        //     $this->rating = $num;
        // }
    }
    public function getRating():int|float 
    {
        return $this->rating;
    }
}