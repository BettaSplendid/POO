<?php

namespace App\src\Entity;

require_once("bootstrap.php");

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */

final class Bd extends Volume
{

   private string $designer;

   public function __construct(int $id, string $title, string $auteur, string $designer)
   {
      parent::__construct($id, $title, $auteur);
      $this->designer = $designer;
   }


   /**
    * Get the value of designer
    */
   public function getDesigner(): string
   {
      return $this->designer;
   }

   /**
    * Set the value of designer
    *
    * @return  self
    */
   public function setDesigner(string $designer): self
   {
      $this->designer = $designer;

      return $this;
   }
}
