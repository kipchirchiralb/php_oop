<?php

require_once 'Connection.php';

// with a normal getter function we need to create an instance of the class to get number connections ##BAD-what if i just want to check nummber of connections ##SOLUTION - static func 
$connection = new Connection();
$connection2 = new Connection();
$connection3 = new Connection();
// print $connection->getCount();

print Connection::getCount(); // accessing a static function