<?php

namespace App;

require_once('vendor/autoload.php');
require_once('bootstrap.php');

use App\src\Entity\Book;
use App\src\Entity\Bd;
use App\src\Entity\Borrow;
use App\src\Entity\Dictionary;
use App\src\Entity\Employee;
use App\src\Entity\Library;
use App\src\Entity\NewsPaper;
use App\src\Entity\Visitor;
use DateTime;
use DateTimeImmutable;

// // new book();
// $lapin = new Book("La vie des lapins", "Mr Lapinot");
// var_dump($lapin);
// $entityManager->persist($lapin);
// $entityManager->flush();


$la_biblio = new Library("Librairie Francois mitterand");
$le_libre_de_la_vie = new Book(554154, "La vie des mouton", "Jean-Paul Jean");


$le_meilleur_des_dicos = new Dictionary(59656, "Chevro", "Chevri", "Editions chevre");
$les_newspapers = new NewsPaper(59656, (new DateTimeImmutable));

$la_bd_des_bd = new Bd("Le titre baby", "Lapin", "lapino");
$entityManager->persist($la_bd_des_bd);

$mr_sabon = new Visitor("sabin", "papin", 54545);
$entityManager->persist($mr_sabon);

$emprunt_num1 = new Borrow((new DateTime), $la_bd_des_bd, $mr_sabon);

// var_dump($la_biblio);
// var_dump($le_libre_de_la_vie);
// var_dump($la_bd_des_bd);
// var_dump($le_meilleur_des_dicos);
// var_dump($les_newspapers);

var_dump($emprunt_num1);

$entityManager->persist($emprunt_num1);
$entityManager->flush();
