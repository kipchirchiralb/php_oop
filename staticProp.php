<?php
require_once 'Counter.php';
require_once 'Connection.php';

$conn1 = new Connection();
$conn2 = new Connection();
$conn3 = new Connection();
$conn4 = new Connection();
$conn5 = new Connection();
// Connection::$count +=19; #bad idea, we only want this to be change strictly by creating a new connection only. So change public static prop to private static prop
print $conn1->getCount(); #getting total number of connections made even after itself





// Counter::$count++;
// Counter::$count++;
// Counter::$count++;
// //  They are available anywhere in the program
// // easy to setup and access
// // same value is available to every object instance of the class -- keeping tract of a value

// print Counter::$count;