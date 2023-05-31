<?php
// static props belong to the whole class not each instance of the class, that is why we do not use $this keyword
class Connection

{
    private static int $count = 0;

    public function __construct()
    {
        // increment count by one every time an instance of this class is created
        self::$count++;
    }
    public static function getCount():int
    {
        return self::$count;
    }
}