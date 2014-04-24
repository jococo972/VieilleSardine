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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Couloir", mappedBy="idEmplacement")
     */
    private $idCouloir;

    /**
     * @var \StockPhysique
     *
     * @ORM\ManyToOne(targetEntity="StockPhysique")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_stock", referencedColumnName="id_stock")
     * })
     */
    private $idStock;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idCouloir = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

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

    /**
     * Add idCouloir
     *
     * @param \VieilleSardine\StockBundle\Entity\Couloir $idCouloir
     * @return Emplacement
     */
    public function addIdCouloir(\VieilleSardine\StockBundle\Entity\Couloir $idCouloir)
    {
        $this->idCouloir[] = $idCouloir;
    
        return $this;
    }

    /**
     * Remove idCouloir
     *
     * @param \VieilleSardine\StockBundle\Entity\Couloir $idCouloir
     */
    public function removeIdCouloir(\VieilleSardine\StockBundle\Entity\Couloir $idCouloir)
    {
        $this->idCouloir->removeElement($idCouloir);
    }

    /**
     * Get idCouloir
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdCouloir()
    {
        return $this->idCouloir;
    }

    /**
     * Set idStock
     *
     * @param \VieilleSardine\StockBundle\Entity\StockPhysique $idStock
     * @return Emplacement
     */
    public function setIdStock(\VieilleSardine\StockBundle\Entity\StockPhysique $idStock = null)
    {
        $this->idStock = $idStock;
    
        return $this;
    }

    /**
     * Get idStock
     *
     * @return \VieilleSardine\StockBundle\Entity\StockPhysique 
     */
    public function getIdStock()
    {
        return $this->idStock;
    }
}