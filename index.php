<?php

class Movie {
    public $nome = '';
    public $genere;
    public $durata = 90;
    public $voto = 0;

public function setDurata($durata){
    return $durata;
}
function __construct(string $_nome, array $_genere, int $_durata, int $_voto)
{
    $this->nome = $_nome;
    $this->genere = $_genere;
    $this->setDurata($_durata);
    $this->voto = $_voto;
}
}

$starWars = new Movie('Star Wars', ['azione','fantascienza','fantasia'], 90 , 5);
$lordOfTheRings = new Movie('Il signore degli anelli', ['azione','fantasia'], 120 , 10);
var_dump($starWars);
var_dump($lordOfTheRings);
