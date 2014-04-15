<?php

namespace VieilleSardine\CommandeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lignes
 *
 * @ORM\Table(name="lignes")
 * @ORM\Entity(repositoryClass="VieilleSardine\CommandeBundle\Entity\LignesRepository")
 */
class Lignes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_ligne", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLigne;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    private $quantite;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="VieilleSardine\LivraisonBundle\Entity\Colis", mappedBy="idLignes")
     */
    private $idColis;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Commande", mappedBy="idLigne")
     */
    private $idCommande;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="VieilleSardine\PanierBundle\Entity\Panier", mappedBy="idLigne")
     */
    private $idPanier;

    /**
     * @var \Produit
     *
     * @ORM\ManyToOne(targetEntity="Produit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_produit", referencedColumnName="id_produit")
     * })
     */
    private $idProduit;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idColis = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idCommande = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idPanier = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    /**
     * Get idLigne
     *
     * @return integer 
     */
    public function getIdLigne()
    {
        return $this->idLigne;
    }

    /**
     * Set quantite
     *
     * @param integer $quantite
     * @return Lignes
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;
    
        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer 
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Add idColis
     *
     * @param \VieilleSardine\LivraisonBundle\Entity\Colis $idColis
     * @return Lignes
     */
    public function addIdColi(\VieilleSardine\LivraisonBundle\Entity\Colis $idColis)
    {
        $this->idColis[] = $idColis;
    
        return $this;
    }

    /**
     * Remove idColis
     *
     * @param \VieilleSardine\LivraisonBundle\Entity\Colis $idColis
     */
    public function removeIdColi(\VieilleSardine\LivraisonBundle\Entity\Colis $idColis)
    {
        $this->idColis->removeElement($idColis);
    }

    /**
     * Get idColis
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdColis()
    {
        return $this->idColis;
    }

    /**
     * Add idCommande
     *
     * @param \VieilleSardine\CommandeBundle\Entity\Commande $idCommande
     * @return Lignes
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
     * Add idPanier
     *
     * @param \VieilleSardine\PanierBundle\Entity\Panier $idPanier
     * @return Lignes
     */
    public function addIdPanier(\VieilleSardine\PanierBundle\Entity\Panier $idPanier)
    {
        $this->idPanier[] = $idPanier;
    
        return $this;
    }

    /**
     * Remove idPanier
     *
     * @param \VieilleSardine\PanierBundle\Entity\Panier $idPanier
     */
    public function removeIdPanier(\VieilleSardine\PanierBundle\Entity\Panier $idPanier)
    {
        $this->idPanier->removeElement($idPanier);
    }

    /**
     * Get idPanier
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdPanier()
    {
        return $this->idPanier;
    }

    /**
     * Set idProduit
     *
     * @param \VieilleSardine\CommandeBundle\Entity\Produit $idProduit
     * @return Lignes
     */
    public function setIdProduit(\VieilleSardine\CommandeBundle\Entity\Produit $idProduit = null)
    {
        $this->idProduit = $idProduit;
    
        return $this;
    }

    /**
     * Get idProduit
     *
     * @return \VieilleSardine\CommandeBundle\Entity\Produit 
     */
    public function getIdProduit()
    {
        return $this->idProduit;
    }
}