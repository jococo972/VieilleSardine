<?php

namespace VieilleSardine\ProduitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity(repositoryClass="VieilleSardine\ProduitBundle\Entity\ProduitRepository")
 */
class Produit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_produit", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=100, nullable=false)
     */
    private $titre;

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
     * @var boolean
     *
     * @ORM\Column(name="statut", type="boolean", nullable=false)
     */
    private $statut;

    /**
     * @var float
     *
     * @ORM\Column(name="tva", type="float", nullable=false)
     */
    private $tva;

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
     * @ORM\Column(name="largeur", type="float", nullable=false)
     */
    private $largeur;

    /**
     * @var float
     *
     * @ORM\Column(name="longueur", type="float", nullable=false)
     */
    private $longueur;

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
     * Get idProduit
     *
     * @return integer 
     */
    public function getIdProduit()
    {
        return $this->idProduit;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Produit
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
     * Set description
     *
     * @param string $description
     * @return Produit
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
     * @return Produit
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
     * @return Produit
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
     * Set statut
     *
     * @param boolean $statut
     * @return Produit
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
     * Set tva
     *
     * @param float $tva
     * @return Produit
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
     * Set poids
     *
     * @param float $poids
     * @return Produit
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
     * @return Produit
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
     * Set largeur
     *
     * @param float $largeur
     * @return Produit
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
     * Set longueur
     *
     * @param float $longueur
     * @return Produit
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
     * Set reference
     *
     * @param string $reference
     * @return Produit
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
     * @return Produit
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
     * @return Produit
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
}