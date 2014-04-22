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
     * @var \DateTime
     *
     * @ORM\Column(name="date_evenement", type="date", nullable=false)
     */
    private $dateEvenement;

    /**
     * @var string
     *
     * @ORM\Column(name="plate_forme", type="string", length=50, nullable=false)
     */
    private $plateForme;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=60, nullable=false)
     */
    private $statut;

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
     * Set dateEvenement
     *
     * @param \DateTime $dateEvenement
     * @return Evenement
     */
    public function setDateEvenement($dateEvenement)
    {
        $this->dateEvenement = $dateEvenement;
    
        return $this;
    }

    /**
     * Get dateEvenement
     *
     * @return \DateTime 
     */
    public function getDateEvenement()
    {
        return $this->dateEvenement;
    }

    /**
     * Set plateForme
     *
     * @param string $plateForme
     * @return Evenement
     */
    public function setPlateForme($plateForme)
    {
        $this->plateForme = $plateForme;
    
        return $this;
    }

    /**
     * Get plateForme
     *
     * @return string 
     */
    public function getPlateForme()
    {
        return $this->plateForme;
    }

    /**
     * Set statut
     *
     * @param string $statut
     * @return Evenement
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;
    
        return $this;
    }

    /**
     * Get statut
     *
     * @return string 
     */
    public function getStatut()
    {
        return $this->statut;
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