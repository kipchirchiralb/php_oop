<?php
require_once 'BaseClass.php';
class SubClass extends BaseClass
{
    public $subProp = "public subclass property";

    public function getParentProtectedProp() : string 
    {
        return $this->getProtectedProp();
    }
    // public function getParentPrivateProp() : string 
    // {
    //    return $this->privateProp; #undefined property privateProp 
    // }
}