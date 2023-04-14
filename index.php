<?php

class Movie {
    public $nome = '';
    public $genere = '';
    public $durata = 90;
    public $voto = 0;


function __construct(string $_nome, array $_genere)
{
    $this->nome = $_nome;
    $this->genere = $_genere;
}
}

$starWars = new Movie('Star Wars', ['azione','fantascienza','fantasia']);
var_dump($starWars);
