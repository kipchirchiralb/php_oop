<?php 
// bundling of data with ethods which operate on the data

    // Why encapsulation?
    /**
     * functionality is defied in one place not multiple places
     * it is definedin a logical place i.e. the same place as the daata
     * the data inside our objects cannot be unexpectedly or unwantedly changed by external code in a different place of our program 
     */

require_once 'Playlist.php';
require_once 'Song.php';

$beatlesSongs = new Playlist();

$song = new Song('Yesterday',3232);
$fakeSong = 'String instead of song'; #song must be of type song

$beatlesSongs->addSong($song);

 var_dump($beatlesSongs->getSongs());