<?php
class Movie
{
    public $title;
    public $poster;
    public $plot;
    public $genre;
    public $duration;


    public function __construct($title, $poster, $plot, $genre, $duration)
    {
        $this->title = $title;
        $this->poster = $poster;
        $this->plot = $plot;
        $this->genre = $genre;
        $this->duration = $duration;
    }

    public function movieDetails()
    {
        return "Titolo : $this->title, Trama: $this->plot, Genere: $this->genre, Durata: $this->duration";
    }
}

$Shining = new Movie('Shining', 'https://xl.movieposterdb.com/22_02/1980/81505/xl_81505_368efb6e.jpg', 'Shining è un film del 1980 diretto da Stanley Kubrick, basato sull’omonimo romanzo di Stephen King...', 'horror', '114 min');
$LordOfTheRings = new Movie('Il Signore degli Anelli', 'https://xl.movieposterdb.com/04_12/2001/0120737/xl_166_0120737_158c8914.jpg?v=2022-12-01%2016:32:18', 'Tre anelli ai Re degli Elfi sotto il cielo che risplende, Sette ai Principi dei Nani nelle lor rocche di pietra, Nove agli Uomini Mortali che la triste morte attende...', 'fantasy', '178 min');
$Matrix = new Movie('Matrix', 'https://xl.movieposterdb.com/05_05/1999/0133093/xl_18427_0133093_b67474af.jpg', 'Thomas Anderson / Neo (Keanu Reeves) è un programmatore della Metacortex, virtuoso cittadino di giorno, mentre di notte è un pericoloso hacker...', 'fantascienza', '136 min');

//var_dump($Shining);
//var_dump($LordOfTheRings);
//var_dump($Matrix);
//echo $Shining->movieDetails();
