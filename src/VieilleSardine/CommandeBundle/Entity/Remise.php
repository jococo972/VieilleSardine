<?php

namespace VieilleSardine\CommandeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Remise
 *
 * @ORM\Table(name="remise")
 * @ORM\Entity(repositoryClass="VieilleSardine\CommandeBundle\Entity\RemiseRepository")
 */
class Remise
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_remise", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRemise;

    /**
     * @var float
     *
     * @ORM\Column(name="pourcentage", type="float", nullable=false)
     */
    private $pourcentage;

    /**
     * @var float
     *
     * @ORM\Column(name="montant_remise", type="float", nullable=false)
     */
    private $montantRemise;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Commande", inversedBy="idRemise")
     * @ORM\JoinTable(name="liaison_commande_remise",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_remise", referencedColumnName="id_remise")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_commande", referencedColumnName="id_commande")
     *   }
     * )
     */
    private $idCommande;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idCommande = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    /**
     * Get idRemise
     *
     * @return integer 
     */
    public function getIdRemise()
    {
        return $this->idRemise;
    }

    /**
     * Set pourcentage
     *
     * @param float $pourcentage
     * @return Remise
     */
    public function setPourcentage($pourcentage)
    {
        $this->pourcentage = $pourcentage;
    
        return $this;
    }

    /**
     * Get pourcentage
     *
     * @return float 
     */
    public function getPourcentage()
    {
        return $this->pourcentage;
    }

    /**
     * Set montantRemise
     *
     * @param float $montantRemise
     * @return Remise
     */
    public function setMontantRemise($montantRemise)
    {
        $this->montantRemise = $montantRemise;
    
        return $this;
    }

    /**
     * Get montantRemise
     *
     * @return float 
     */
    public function getMontantRemise()
    {
        return $this->montantRemise;
    }

    /**
     * Add idCommande
     *
     * @param \VieilleSardine\CommandeBundle\Entity\Commande $idCommande
     * @return Remise
     */
    public function addIdCommande(\VieilleSardine\CommandeBundle\Entity\Commande $idCommande)
    {
        $this->idCommande[] = $idCommande;
    
        return $this;
    }

    /**
     * Remove idCommande
     *
     * @param \VieilleSardine\CommandeBundle\Entity\Commande $idCommande
     */
    public function removeIdCommande(\VieilleSardine\CommandeBundle\Entity\Commande $idCommande)
    {
        $this->idCommande->removeElement($idCommande);
    }

    /**
     * Get idCommande
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdCommande()
    {
        return $this->idCommande;
    }
}