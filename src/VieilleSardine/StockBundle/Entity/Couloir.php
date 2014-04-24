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
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Emplacement", inversedBy="idCouloir")
     * @ORM\JoinTable(name="couloir_contient_emplacements",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_couloir", referencedColumnName="id_couloir")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_emplacement", referencedColumnName="id_emplacement")
     *   }
     * )
     */
    private $idEmplacement;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idEmplacement = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

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
     * Add idEmplacement
     *
     * @param \VieilleSardine\StockBundle\Entity\Emplacement $idEmplacement
     * @return Couloir
     */
    public function addIdEmplacement(\VieilleSardine\StockBundle\Entity\Emplacement $idEmplacement)
    {
        $this->idEmplacement[] = $idEmplacement;
    
        return $this;
    }

    /**
     * Remove idEmplacement
     *
     * @param \VieilleSardine\StockBundle\Entity\Emplacement $idEmplacement
     */
    public function removeIdEmplacement(\VieilleSardine\StockBundle\Entity\Emplacement $idEmplacement)
    {
        $this->idEmplacement->removeElement($idEmplacement);
    }

    /**
     * Get idEmplacement
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdEmplacement()
    {
        return $this->idEmplacement;
    }
}