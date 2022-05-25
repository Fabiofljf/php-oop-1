<?php
// 1. Creo la classe (keyword class + nome classe).

class Movie{
    // 2. Creo delle variabili d'istanza.
    public $title;
    public $description;
    public $genre;

    // 3. Creo un costruttore.
    public function __construct(String $title, $description, $genre) {
        $this->title = $title;
        $this->description = $description;
        $this->genre = $genre;
    }

    // 4. Creo un metodo che cambia nome. ($title)
    public function setMovie($title){
        $this->title = 'Alla ricerca di Dori';
    }
}

// 5. Creo un istanza (keyword class + nome classe)
$movie_1 = new Movie('Avatar', 'Descrizione del film da vedere', 'Famiglia');
$movie_2 = new Movie('Alla ricerca di Nemo', 'Descrizione del film da vedere', 'Famiglia');

//$avatar->title='rambo';


var_dump($movie_1);
var_dump($movie_2);

// Per richiamare i metodi su un'istanza si usa l’operatore ->
$movie_2->setMovie($title);
var_dump($movie_2);



