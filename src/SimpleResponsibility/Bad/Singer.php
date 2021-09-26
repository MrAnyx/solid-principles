<?php

/**
 * @author Robin B
 */

class Singer
{
    public function sing()
    {
        echo "🎶🎵";
    }

    public function writeSongs()
    {
        echo "I'm writing songs of my album";
    }

    // This method violate the SRP principe because it is not the role of the singer to publish the song
    public function publishSong()
    {
        echo "I'm publishing the song on Spotify";
    }
}