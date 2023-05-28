<?php

class BaseClass
{
    public $publicProp = "a public string";

    protected $protectedProp = 'a protected var';

    private $privateProp = 'a private prop';

    protected function getProtectedProp() : string
    {
        return $this->protectedProp;
    }

    public function getPrivateProp(): string
    {
        return $this->privateProp;
    }
}
