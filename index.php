<?php

namespace App;
require_once('vendor/autoload.php');
require_once('bootstrap.php');

use App\src\Entity\Book;
use App\src\Entity\Bd;
use App\Entity\Emprunt;
use App\EntityManager;



// // new book();
// $lapin = new Book("La vie des lapins", "Mr Lapinot");
// var_dump($lapin);
// $entityManager->persist($lapin);
// $entityManager->flush();

$jhh = new Bd("Lapin","lapino","lapino");
var_dump($jhh);
