<?php

require_once 'Playlist.php';
require_once 'Song.php';

$playlist = new Playlist();

$song = new Song('Bird man', 202);
// $song2 = 'Yesterday'; #type error

$song2 = new Song("Yesterday",1);

$playlist->addSong($song);
$playlist->addSong($song2);
print count($playlist->songs);
// print_r($playlist);

foreach($playlist->songs as $song){
    print $song->name . PHP_EOL;
}