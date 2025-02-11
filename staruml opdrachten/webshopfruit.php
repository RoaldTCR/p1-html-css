<?php 
// functie: hoofdprogramma webshop fruit
// auteur: Roald van der Poel

// Initialisatie
include_once 'Fruit.php';


//main

//maak een object banaan en geef hem de class fruit
$banaan = new Fruit();
$banaan ->naam = 'Banaan';
var_dump($banaan);

//maak een nieuw object aan en geef hem de class fruit
$appel = new Fruit();
$appel ->naam = 'Elstar';
var_dump($appel);

?>