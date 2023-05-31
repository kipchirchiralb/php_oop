<?php
$songs = [];
class Playlist
{
    private $songs = [];
    // return type of void indicates that this method does not return any val
    public function addSong(Song $song): void
    {
        $this->songs[] = $song;
    }

    public function getLength(): int
    {
        return count($this -> songs);
        // return '4 songs'; # Playlist::getLength(): Return value must be of type int,
    }
    public function getSongs():array
    {
        return $this->songs;
    }
}