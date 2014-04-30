<?php

namespace VieilleSardine\ProduitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Coffret
 *
 * @ORM\Table(name="coffret")
 * @ORM\Entity(repositoryClass="VieilleSardine\ProduitBundle\Entity\CoffretRepository")
 */
class Coffret
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_coffret", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCoffret;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=100, nullable=false)
     */
    private $titre;

    /**
     * @var float
     *
     * @ORM\Column(name="poids", type="float", nullable=false)
     */
    private $poids;

    /**
     * @var float
     *
     * @ORM\Column(name="hauteur", type="float", nullable=false)
     */
    private $hauteur;

    /**
     * @var float
     *
     * @ORM\Column(name="longueur", type="float", nullable=false)
     */
    private $longueur;

    /**
     * @var float
     *
     * @ORM\Column(name="largeur", type="float", nullable=false)
     */
    private $largeur;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_ht", type="float", nullable=false)
     */
    private $prixHt;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_ttc", type="float", nullable=false)
     */
    private $prixTtc;

    /**
     * @var float
     *
     * @ORM\Column(name="tva", type="float", nullable=false)
     */
    private $tva;

    /**
     * @var boolean
     *
     * @ORM\Column(name="statut", type="boolean", nullable=false)
     */
    private $statut;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_produit", type="integer", nullable=false)
     */
    private $nbProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="string", length=10, nullable=false)
     */
    private $reference;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantite_vendue", type="integer", nullable=true)
     */
    private $quantiteVendue;

    /**
     * @var integer
     *
     * @ORM\Column(name="note", type="integer", nullable=true)
     */
    private $note;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Lignes", inversedBy="idCoffret")
     * @ORM\JoinTable(name="composition_coffret",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_coffret", referencedColumnName="id_coffret")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_ligne", referencedColumnName="id_ligne")
     *   }
     * )
     */
    private $idLigne;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idLigne = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    /**
     * Get idCoffret
     *
     * @return integer 
     */
    public function getIdCoffret()
    {
        return $this->idCoffret;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Coffret
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set poids
     *
     * @param float $poids
     * @return Coffret
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;
    
        return $this;
    }

    /**
     * Get poids
     *
     * @return float 
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set hauteur
     *
     * @param float $hauteur
     * @return Coffret
     */
    public function setHauteur($hauteur)
    {
        $this->hauteur = $hauteur;
    
        return $this;
    }

    /**
     * Get hauteur
     *
     * @return float 
     */
    public function getHauteur()
    {
        return $this->hauteur;
    }

    /**
     * Set longueur
     *
     * @param float $longueur
     * @return Coffret
     */
    public function setLongueur($longueur)
    {
        $this->longueur = $longueur;
    
        return $this;
    }

    /**
     * Get longueur
     *
     * @return float 
     */
    public function getLongueur()
    {
        return $this->longueur;
    }

    /**
     * Set largeur
     *
     * @param float $largeur
     * @return Coffret
     */
    public function setLargeur($largeur)
    {
        $this->largeur = $largeur;
    
        return $this;
    }

    /**
     * Get largeur
     *
     * @return float 
     */
    public function getLargeur()
    {
        return $this->largeur;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Coffret
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set prixHt
     *
     * @param float $prixHt
     * @return Coffret
     */
    public function setPrixHt($prixHt)
    {
        $this->prixHt = $prixHt;
    
        return $this;
    }

    /**
     * Get prixHt
     *
     * @return float 
     */
    public function getPrixHt()
    {
        return $this->prixHt;
    }

    /**
     * Set prixTtc
     *
     * @param float $prixTtc
     * @return Coffret
     */
    public function setPrixTtc($prixTtc)
    {
        $this->prixTtc = $prixTtc;
    
        return $this;
    }

    /**
     * Get prixTtc
     *
     * @return float 
     */
    public function getPrixTtc()
    {
        return $this->prixTtc;
    }

    /**
     * Set tva
     *
     * @param float $tva
     * @return Coffret
     */
    public function setTva($tva)
    {
        $this->tva = $tva;
    
        return $this;
    }

    /**
     * Get tva
     *
     * @return float 
     */
    public function getTva()
    {
        return $this->tva;
    }

    /**
     * Set statut
     *
     * @param boolean $statut
     * @return Coffret
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;
    
        return $this;
    }

    /**
     * Get statut
     *
     * @return boolean 
     */
    public function getStatut()
    {
        return $this->statut;
    }

    /**
     * Set nbProduit
     *
     * @param integer $nbProduit
     * @return Coffret
     */
    public function setNbProduit($nbProduit)
    {
        $this->nbProduit = $nbProduit;
    
        return $this;
    }

    /**
     * Get nbProduit
     *
     * @return integer 
     */
    public function getNbProduit()
    {
        return $this->nbProduit;
    }

    /**
     * Set reference
     *
     * @param string $reference
     * @return Coffret
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
    
        return $this;
    }

    /**
     * Get reference
     *
     * @return string 
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set quantiteVendue
     *
     * @param integer $quantiteVendue
     * @return Coffret
     */
    public function setQuantiteVendue($quantiteVendue)
    {
        $this->quantiteVendue = $quantiteVendue;
    
        return $this;
    }

    /**
     * Get quantiteVendue
     *
     * @return integer 
     */
    public function getQuantiteVendue()
    {
        return $this->quantiteVendue;
    }

    /**
     * Set note
     *
     * @param integer $note
     * @return Coffret
     */
    public function setNote($note)
    {
        $this->note = $note;
    
        return $this;
    }

    /**
     * Get note
     *
     * @return integer 
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Add idLigne
     *
     * @param \VieilleSardine\ProduitBundle\Entity\Lignes $idLigne
     * @return Coffret
     */
    public function addIdLigne(\VieilleSardine\ProduitBundle\Entity\Lignes $idLigne)
    {
        $this->idLigne[] = $idLigne;
    
        return $this;
    }

    /**
     * Remove idLigne
     *
     * @param \VieilleSardine\ProduitBundle\Entity\Lignes $idLigne
     */
    public function removeIdLigne(\VieilleSardine\ProduitBundle\Entity\Lignes $idLigne)
    {
        $this->idLigne->removeElement($idLigne);
    }

    /**
     * Get idLigne
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdLigne()
    {
        return $this->idLigne;
    }
}