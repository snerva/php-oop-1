<?php
require_once __DIR__ . '/Genre.php';

class Movie
{
    public $title;
    public $poster;
    public $plot;
    public $genre;
    public $duration;


    public function __construct($title, $poster, $plot, array $genres, $duration)
    {
        $this->title = $title;
        $this->poster = $poster;
        $this->plot = $plot;
        $this->genres = $genres;
        $this->duration = $duration;

        foreach ($genres as $genre) {
            if (!$genre instanceof Genre) {
                echo 'Must be an istance of the Genre class';
                die;
            }
        }
    }

    public function getGenres()
    {
        $genres = [];
        foreach ($this->genres as $genre) {
            array_push($genres, $genre->name);
        }
        return implode(',', $genres);
    }

    public function movieDetails()
    {
        $genres = $this->getGenres();
        return "Titolo : $this->title, Trama: $this->plot, Genere: $genres, Durata: $this->duration";
    }
}
