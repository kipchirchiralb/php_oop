<?php
// boolen, integer, float,string,object,resource,array,null
declare(strict_types=1); // to avoid type casting(int coercion)
require_once 'Song.php';

// $song = new Song(45, 969); #works without strict_type=1 declaration
$song = new Song("above all", 969);

var_dump($song->name);
var_dump($song->numberOfPlays);