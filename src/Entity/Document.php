<?php

namespace App\src\Entity;

require_once("bootstrap.php");

use Doctrine\ORM\Mapping as ORM;
abstract class Document
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private int $id;
    
    /** @ORM\Column(type="string") */
    private string $title;


    public function __construct(int $id, string $title)
    {
        $this->id = $id;
        $this->title = $title;
    }

    /**
     * Get the value of name
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set the value of Title
     *
     * @return  self
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }
}
