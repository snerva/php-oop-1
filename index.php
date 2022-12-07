<?php
/*
Definire una classe ‘Movie’
all'interno della classe sono dichiarate delle variabili d'istanza
all'interno della classe è definito un costruttore
all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
Bonus 1:
Modificare la classe Movie in modo che accetti piú di un genere.
Bonus 2:
Creare un layout completo per stampare a schermo una lista di movies.
Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. 
*/

require __DIR__ . '/Models/movies.php';

$movies = [$Shining, $LordOfTheRings, $Matrix];
//var_dump($movies);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body class="bg-black">
    <header class="bg-dark text-white text-center p-5">
        <h1>Movies</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab pariatur quaerat in perferendis provident facilis, illo ex commodi voluptas molestias?</p>
    </header>
    <main>
        <div class="container py-4">
            <div class="movies_box">
                <div class="row row-cols-3 p-3 g-3 text-center">
                    <?php foreach ($movies as $movie) : ?>
                        <div class="col  p-4">
                            <div class="contents bg-dark text-white p-3">
                                <div class="title pb-2">
                                    <h3><?php echo $movie->title ?></h3>
                                </div>
                                <div class="poster">
                                    <img class="img-fluid" src="<?php echo $movie->poster ?>" alt="">
                                </div>
                                <div class="plot p-2">
                                    <p><?php echo $movie->plot ?></p>
                                </div>
                                <div class="genre">
                                    <span><?php echo $movie->genre ?></span>
                                </div>
                                <div class="time pt-2">
                                    <span><?php echo $movie->duration ?></span>
                                </div>
                            </div>

                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </main>

</body>

</html>