<?php

namespace App\src\Entity;

require_once("bootstrap.php");

use Doctrine\ORM\Mapping as ORM;

abstract class Volume extends Document
{

    /**
     * @ORM\Column(type="string")
     */
    private string $author;

    public function __construct(int $id, string $title, string $author)
    {
        parent::__construct($id, $title);
        $this->author = $author;
    }

    /**
     * Get the value of author
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * Set the value of author
     *
     * @return  self
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }
}
