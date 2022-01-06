<?php

namespace App\src\Entity;

final class Book extends Volume
{
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
}
