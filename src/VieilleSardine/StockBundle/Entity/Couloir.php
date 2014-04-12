<?php

namespace VieilleSardine\StockBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Couloir
 *
 * @ORM\Table(name="couloir")
 * @ORM\Entity(repositoryClass="VieilleSardine\StockBundle\Entity\CouloirRepository")
 */
class Couloir
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_couloir", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCouloir;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_couloir", type="integer", nullable=false)
     */
    private $numCouloir;

    /**
     * @var \Emplacement
     *
     * @ORM\ManyToOne(targetEntity="Emplacement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_emplacement", referencedColumnName="id_emplacement")
     * })
     */
    private $idEmplacement;

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
     * Get idCouloir
     *
     * @return integer 
     */
    public function getIdCouloir()
    {
        return $this->idCouloir;
    }

    /**
     * Set numCouloir
     *
     * @param integer $numCouloir
     * @return Couloir
     */
    public function setNumCouloir($numCouloir)
    {
        $this->numCouloir = $numCouloir;
    
        return $this;
    }

    /**
     * Get numCouloir
     *
     * @return integer 
     */
    public function getNumCouloir()
    {
        return $this->numCouloir;
    }

    /**
     * Set idEmplacement
     *
     * @param \VieilleSardine\StockBundle\Entity\Emplacement $idEmplacement
     * @return Couloir
     */
    public function setIdEmplacement(\VieilleSardine\StockBundle\Entity\Emplacement $idEmplacement = null)
    {
        $this->idEmplacement = $idEmplacement;
    
        return $this;
    }

    /**
     * Get idEmplacement
     *
     * @return \VieilleSardine\StockBundle\Entity\Emplacement 
     */
    public function getIdEmplacement()
    {
        return $this->idEmplacement;
    }

    /**
     * Set idStock
     *
     * @param \VieilleSardine\StockBundle\Entity\StockPhysique $idStock
     * @return Couloir
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