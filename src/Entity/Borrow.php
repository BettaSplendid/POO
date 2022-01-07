<?php

namespace App\src\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\src\Entity\member;
use \DateTime;

/**
 * @ORM\Entity
 */

class Borrow
{


    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */

    private string $id;

    /**
     * @ORM\Column(type="integer")
     */

    private DateTime $borrowDate;

    private string $return_date;

    private string $delay;


    /**
     * @ORM\ManyToOne(targetEntity="Member")
     */

    private Member $member;

    /**
     * @ORM\ManyToOne(targetEntity="Book")
     */
    private Book $boook;
}
