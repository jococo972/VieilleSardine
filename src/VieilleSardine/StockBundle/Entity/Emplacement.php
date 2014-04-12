<?php

namespace VieilleSardine\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Emplacement
 *
 * @ORM\Table(name="emplacement")
 * @ORM\Entity(repositoryClass="VieilleSardine\StockBundle\Entity\EmplacementRepository")
 */
class Emplacement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_emplacement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEmplacement;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_travee", type="integer", nullable=false)
     */
    private $numTravee;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_etagere", type="integer", nullable=false)
     */
    private $numEtagere;



    /**
     * Get idEmplacement
     *
     * @return integer 
     */
    public function getIdEmplacement()
    {
        return $this->idEmplacement;
    }

    /**
     * Set numTravee
     *
     * @param integer $numTravee
     * @return Emplacement
     */
    public function setNumTravee($numTravee)
    {
        $this->numTravee = $numTravee;
    
        return $this;
    }

    /**
     * Get numTravee
     *
     * @return integer 
     */
    public function getNumTravee()
    {
        return $this->numTravee;
    }

    /**
     * Set numEtagere
     *
     * @param integer $numEtagere
     * @return Emplacement
     */
    public function setNumEtagere($numEtagere)
    {
        $this->numEtagere = $numEtagere;
    
        return $this;
    }

    /**
     * Get numEtagere
     *
     * @return integer 
     */
    public function getNumEtagere()
    {
        return $this->numEtagere;
    }
}