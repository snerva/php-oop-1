<?php

require_once __DIR__ . '/../Models/Movies.php';
require_once __DIR__ . '/../Models/Genre.php';

$genres =
    [
        new Genre('horror'),
        new Genre('fantasy'),
        new Genre('fantascienza')
    ];

$Shining = new Movie('Shining', 'https://xl.movieposterdb.com/22_02/1980/81505/xl_81505_368efb6e.jpg', 'Shining è un film del 1980 diretto da Stanley Kubrick, basato sull’omonimo romanzo di Stephen King...', $genres, '114 min');
$LordOfTheRings = new Movie('Il Signore degli Anelli', 'https://xl.movieposterdb.com/04_12/2001/0120737/xl_166_0120737_158c8914.jpg?v=2022-12-01%2016:32:18', 'Tre anelli ai Re degli Elfi sotto il cielo che risplende, Sette ai Principi dei Nani nelle lor rocche di pietra, Nove agli Uomini Mortali che la triste morte attende...', $genres, '178 min');
$Matrix = new Movie('Matrix', 'https://xl.movieposterdb.com/05_05/1999/0133093/xl_18427_0133093_b67474af.jpg', 'Thomas Anderson / Neo (Keanu Reeves) è un programmatore della Metacortex, virtuoso cittadino di giorno, mentre di notte è un pericoloso hacker...', $genres, '136 min');

//var_dump($Shining);
//var_dump($LordOfTheRings);
//var_dump($Matrix);
//echo $Shining->movieDetails();




$movies = [$Shining, $LordOfTheRings, $Matrix];
//var_dump($movies);
