<?php

namespace VieilleSardine\LivraisonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Colis
 *
 * @ORM\Table(name="colis")
 * @ORM\Entity(repositoryClass="VieilleSardine\LivraisonBundle\Entity\ColisRepository")
 */
class Colis
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_colis", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idColis;

    /**
     * @var float
     *
     * @ORM\Column(name="poids_colis", type="float", nullable=false)
     */
    private $poidsColis;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_preparation", type="date", nullable=false)
     */
    private $datePreparation;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_colis", type="integer", nullable=false)
     */
    private $nbColis;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", nullable=true)
     */
    private $type;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="VieilleSardine\CommandeBundle\Entity\Lignes", inversedBy="idColis")
     * @ORM\JoinTable(name="colis_contient_lignes",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_colis", referencedColumnName="id_colis")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_lignes", referencedColumnName="id_ligne")
     *   }
     * )
     */
    private $idLignes;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="VieilleSardine\CommandeBundle\Entity\Commande", mappedBy="idColis")
     */
    private $idCommande;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Livraison", mappedBy="idColis")
     */
    private $idLivraison;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="VieilleSardine\RetourBundle\Entity\Retour", mappedBy="idColis")
     */
    private $idRetour;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idLignes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idCommande = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idLivraison = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idRetour = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    /**
     * Get idColis
     *
     * @return integer 
     */
    public function getIdColis()
    {
        return $this->idColis;
    }

    /**
     * Set poidsColis
     *
     * @param float $poidsColis
     * @return Colis
     */
    public function setPoidsColis($poidsColis)
    {
        $this->poidsColis = $poidsColis;
    
        return $this;
    }

    /**
     * Get poidsColis
     *
     * @return float 
     */
    public function getPoidsColis()
    {
        return $this->poidsColis;
    }

    /**
     * Set datePreparation
     *
     * @param \DateTime $datePreparation
     * @return Colis
     */
    public function setDatePreparation($datePreparation)
    {
        $this->datePreparation = $datePreparation;
    
        return $this;
    }

    /**
     * Get datePreparation
     *
     * @return \DateTime 
     */
    public function getDatePreparation()
    {
        return $this->datePreparation;
    }

    /**
     * Set nbColis
     *
     * @param integer $nbColis
     * @return Colis
     */
    public function setNbColis($nbColis)
    {
        $this->nbColis = $nbColis;
    
        return $this;
    }

    /**
     * Get nbColis
     *
     * @return integer 
     */
    public function getNbColis()
    {
        return $this->nbColis;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Colis
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Add idLignes
     *
     * @param \VieilleSardine\CommandeBundle\Entity\Lignes $idLignes
     * @return Colis
     */
    public function addIdLigne(\VieilleSardine\CommandeBundle\Entity\Lignes $idLignes)
    {
        $this->idLignes[] = $idLignes;
    
        return $this;
    }

    /**
     * Remove idLignes
     *
     * @param \VieilleSardine\CommandeBundle\Entity\Lignes $idLignes
     */
    public function removeIdLigne(\VieilleSardine\CommandeBundle\Entity\Lignes $idLignes)
    {
        $this->idLignes->removeElement($idLignes);
    }

    /**
     * Get idLignes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdLignes()
    {
        return $this->idLignes;
    }

    /**
     * Add idCommande
     *
     * @param \VieilleSardine\CommandeBundle\Entity\Commande $idCommande
     * @return Colis
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

    /**
     * Add idLivraison
     *
     * @param \VieilleSardine\LivraisonBundle\Entity\Livraison $idLivraison
     * @return Colis
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

    /**
     * Add idRetour
     *
     * @param \VieilleSardine\LivraisonBundle\Entity\Retour $idRetour
     * @return Colis
     */
    public function addIdRetour(\VieilleSardine\LivraisonBundle\Entity\Retour $idRetour)
    {
        $this->idRetour[] = $idRetour;
    
        return $this;
    }

    /**
     * Remove idRetour
     *
     * @param \VieilleSardine\LivraisonBundle\Entity\Retour $idRetour
     */
    public function removeIdRetour(\VieilleSardine\LivraisonBundle\Entity\Retour $idRetour)
    {
        $this->idRetour->removeElement($idRetour);
    }

    /**
     * Get idRetour
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdRetour()
    {
        return $this->idRetour;
    }
}