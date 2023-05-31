<?php
require_once 'Connection.php';

$conn1 = new Connection();
$conn2 = new Connection();
$conn3 = new Connection();
print Connection::$count;