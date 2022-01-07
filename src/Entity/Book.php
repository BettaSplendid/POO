<?php

namespace App\src\Entity;

require_once("bootstrap.php");

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */

final class Book extends Volume
{



    /**
     * @ORM\Column(type="integer")
     */
    private int $available = 1;

    public function __construct(string $title, string $author)
    {
        parent::__construct($title, $author);
    }


    /**
     * Get the value of available
     */
    public function getAvailable(): int
    {
        return $this->available;
    }

    /**
     * Set the value of available
     *
     * @return  self
     */
    public function setAvailable(int $available): self
    {
        $this->available = $available;

        return $this;
    }

    public function isBorrowable(): bool
    {
        return $this->available;
    }

    // public function addBookToDatabase(): void
    // {
    //     $entityManager->persist($product);
    //     $entityManager->flush();
    // }
}

// $lapin = new book("La vie des lapins", "Mr Lapinot");
// $vache = new book("La vie des vaches", "Mr Vachino");

// $entityManager->persist($lapin, $vache);
// $entityManager->flush();
