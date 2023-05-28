<?php

require_once 'Playlist.php';
require_once 'Song.php';

$playlist = new Playlist();

$song = new Song('Bird man', 202);
$song2 = new Song("Yesterday",1);

$playlist->addSong($song);

$playlist->addSong($song2);

// getLength() should return an int for the comparison to work
if($playlist->getLength() < 10){
    print 'short playlist';
}