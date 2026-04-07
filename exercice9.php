<?php
/*
 * ÉNONCÉ :
 * Créez une classe MusicAlbum avec les propriétés title, artist et tracks (tableau).
 * Ajoutez les getters/setters et une méthode addTrack() pour ajouter un morceau.
 * Ajoutez une méthode displayAlbum() qui affiche les infos et la liste des morceaux.
 * Instanciez un album, ajoutez des morceaux et affichez l'album.
*/

class MusicAlbum {
    protected $title;
    protected $artist;
    protected $tracks = [];

    public function __construct(string $title, string $artist) {
        $this->title = $title;
        $this->artist = $artist;
    }

    // Getters
    public function getTitle() {
        return $this->title;
    }

    public function getArtist() {
        return $this->artist;
    }

    public function getTracks() {
        return $this->tracks;
    }

    // Setters
    public function setTitle(string $title) {
        $this->title = $title;
    }

    public function setArtist(string $artist) {
        $this->artist = $artist;
    }

    public function addTrack(string $track) {
        $this->tracks[] = $track;
    }

    public function displayAlbum() {
        echo "Album: " . $this->title . "<br>";
        echo "Artist: " . $this->artist . "<br>";
        echo "Tracks:<br>";
        foreach ($this->tracks as $index => $track) {
            echo ($index + 1) . ". " . $track . "<br>";
        }
    }
}

$album = new MusicAlbum("Thriller", "Michael Jackson");
$album->addTrack("Wanna Be Startin' Somethin'");
$album->addTrack("Baby Be Mine");
$album->addTrack("The Girl Is Mine");
$album->addTrack("Thriller");   
$album->displayAlbum();

