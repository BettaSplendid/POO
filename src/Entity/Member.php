<?php

namespace App\src\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\MappedSuperClass
 */

abstract class Member
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    public int $id;

    /**
     * @ORM\Column(length=140) 
     */
    private string $lastname;

    /**
     * @ORM\Column(length=140)
     */
    private string $firstname;


    public function __construct(string $l, string $f)
    {
        $this->lastname = $l;
        $this->firstname = $f;

        $this->id = random_int(1, 99999);
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * Get the value of firstname
     */
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @return  self
     */
    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of lastname
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */
    public function setLastname(string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function returnBook(): void
    {
    }

    // public function addMemberToDbtest()
    // {
    //     $queryBuilder
    //     ->select('id', 'name')
    //     ->from('users')
    //     ->where('email = ?')
    //     ->setParameter(0, $userInputEmail)
    // ;
    // }
}
