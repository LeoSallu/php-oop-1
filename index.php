<?php
require_once __DIR__.'/models/Movie.php';


$starWars = new Movie('Star Wars', ['azione','fantascienza','fantasia'], 90 , 5);
$lordOfTheRings = new Movie('Il signore degli anelli', ['azione','fantasia'], 120 , 10);
var_dump($starWars);
var_dump($lordOfTheRings);
