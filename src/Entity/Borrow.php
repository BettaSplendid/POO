<?php

namespace App\src\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\src\Entity\Member;
use app\src\Entity\Book;
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
     * @ORM\Column(type="datetime")
     */
    private DateTime $borrowDate;

    /**
     * @ORM\Column(length="8")
     */
    private string $return_date;

    /**
     * @ORM\Column(length="8")
     */
    private string $delay;



    //  @ORM\JoinColumn(name="document_id", referencedColumnName="doc_id")
    // @ORM\JoinColumn(name="visitor_id", referencedColumnName="mem_id")

    /**
     * @ORM\ManyToOne(targetEntity="Document")
     * @ORM\JoinColumn(nullable=true, referencedColumnName="id")
     */
    private Document $document;

    /**
     * @ORM\ManyToOne(targetEntity="visitor" )
     * @ORM\JoinColumn(nullable=true, referencedColumnName="id")
     */

    private Visitor $visitor;


    public function __construct(DateTime $borrowDate, Document $document, Visitor $visitor)
    {
        $this->borrowDate = $borrowDate;
        $this->document = $document;
        $this->visitor = $visitor;
    }
}
