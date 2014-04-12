<?php

namespace VieilleSardine\LivraisonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evenement
 *
 * @ORM\Table(name="evenement")
 * @ORM\Entity(repositoryClass="VieilleSardine\LivraisonBundle\Entity\EvenementRepository")
 */
class Evenement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_evenement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEvenement;

    /**
     * @var string
     *
     * @ORM\Column(name="type_evenement", type="string", nullable=false)
     */
    private $typeEvenement;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Livraison", mappedBy="idEvenement")
     */
    private $idLivraison;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idLivraison = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    /**
     * Get idEvenement
     *
     * @return integer 
     */
    public function getIdEvenement()
    {
        return $this->idEvenement;
    }

    /**
     * Set typeEvenement
     *
     * @param string $typeEvenement
     * @return Evenement
     */
    public function setTypeEvenement($typeEvenement)
    {
        $this->typeEvenement = $typeEvenement;
    
        return $this;
    }

    /**
     * Get typeEvenement
     *
     * @return string 
     */
    public function getTypeEvenement()
    {
        return $this->typeEvenement;
    }

    /**
     * Add idLivraison
     *
     * @param \VieilleSardine\LivraisonBundle\Entity\Livraison $idLivraison
     * @return Evenement
     */
    public function addIdLivraison(\VieilleSardine\LivraisonBundle\Entity\Livraison $idLivraison)
    {
        $this->idLivraison[] = $idLivraison;
    
        return $this;
    }

    /**
     * Remove idLivraison
     *
     * @param \VieilleSardine\LivraisonBundle\Entity\Livraison $idLivraison
     */
    public function removeIdLivraison(\VieilleSardine\LivraisonBundle\Entity\Livraison $idLivraison)
    {
        $this->idLivraison->removeElement($idLivraison);
    }

    /**
     * Get idLivraison
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdLivraison()
    {
        return $this->idLivraison;
    }
}