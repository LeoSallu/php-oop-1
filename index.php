<?php

class Movie {
    public $genere = '';
    public $durata = 90;
    public $voto = 0;
}

$starWars = new Movie();
$starWars ->genere='Azione';
var_dump($starWars);
