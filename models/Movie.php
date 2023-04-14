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