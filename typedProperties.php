<?php 
require 'Song.php';

$songTitles = ['Yesterday','Help','Something'];

$song = new Song($songTitles[0],100);

// $song->name = $songTitles; # song name stricly typed to string,cannot allow array-- php 7.4+
$song -> numberOfPlays = [400];
// a string wil be converted to number but array gives TypeError because numberofPlays is a typedProperty
var_dump($song);