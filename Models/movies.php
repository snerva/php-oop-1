<?php
class Movie
{
    public $title;
    public $plot;
    public $genre;
    public $duration;


    public function __construct($title, $plot, $genre, $duration)
    {
        $this->title = $title;
        $this->plot = $plot;
        $this->genre = $genre;
        $this->duration = $duration;
    }

    public function movieDetails()
    {
        return "Titolo : $this->title, Trama: $this->plot, Genere: $this->genre, Durata: $this->duration";
    }
}

$Shining = new Movie('Shining', 'Shining è un film del 1980 diretto da Stanley Kubrick, basato sull’omonimo romanzo di Stephen King...', 'horror', '114 min');
$LordOfTheRings = new Movie('Il Signore degli Anelli', 'Tre anelli ai Re degli Elfi sotto il cielo che risplende, Sette ai Principi dei Nani nelle lor rocche di pietra, Nove agli Uomini Mortali che la triste morte attende...', 'fantasy', '178 min');
$Matrix = new Movie('Matrix', 'Thomas Anderson / Neo (Keanu Reeves) è un programmatore della Metacortex, virtuoso cittadino di giorno, mentre di notte è un pericoloso hacker...', 'fantascienza', '136 min');

//var_dump($Shining);
//var_dump($LordOfTheRings);
//var_dump($Matrix);
//echo $Shining->movieDetails();
