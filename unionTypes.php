<?php 

require 'Song.php';
// setting one var as more than one type 
$song = new Song("TommorowLand", 300);

$song->setRating(9.5);

var_dump($song);