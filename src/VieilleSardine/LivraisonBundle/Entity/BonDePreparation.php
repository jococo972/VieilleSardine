<?php

namespace VieilleSardine\LivraisonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BonDePreparation
 *
 * @ORM\Table(name="bon_de_preparation")
 * @ORM\Entity(repositoryClass="VieilleSardine\LivraisonBundle\Entity\BonDePreparationRepository")
 */
class BonDePreparation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_bon_preparation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idBonPreparation;

    /**
     * @var integer
     *
     * @ORM\Column(name="red_produit", type="integer", nullable=false)
     */
    private $redProduit;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantite_produit", type="integer", nullable=false)
     */
    private $quantiteProduit;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_commande", type="integer", nullable=false)
     */
    private $numCommande;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Livraison", mappedBy="idBonPreparation")
     */
    private $idLivraison;

    /**
     * @var \Emplacement
     *
     * @ORM\ManyToOne(targetEntity="VieilleSardine\StockBundle\Entity\Emplacement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="emplacement", referencedColumnName="id_emplacement")
     * })
     */
    private $emplacement;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idLivraison = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    /**
     * Get idBonPreparation
     *
     * @return integer 
     */
    public function getIdBonPreparation()
    {
        return $this->idBonPreparation;
    }

    /**
     * Set redProduit
     *
     * @param integer $redProduit
     * @return BonDePreparation
     */
    public function setRedProduit($redProduit)
    {
        $this->redProduit = $redProduit;
    
        return $this;
    }

    /**
     * Get redProduit
     *
     * @return integer 
     */
    public function getRedProduit()
    {
        return $this->redProduit;
    }

    /**
     * Set quantiteProduit
     *
     * @param integer $quantiteProduit
     * @return BonDePreparation
     */
    public function setQuantiteProduit($quantiteProduit)
    {
        $this->quantiteProduit = $quantiteProduit;
    
        return $this;
    }

    /**
     * Get quantiteProduit
     *
     * @return integer 
     */
    public function getQuantiteProduit()
    {
        return $this->quantiteProduit;
    }

    /**
     * Set numCommande
     *
     * @param integer $numCommande
     * @return BonDePreparation
     */
    public function setNumCommande($numCommande)
    {
        $this->numCommande = $numCommande;
    
        return $this;
    }

    /**
     * Get numCommande
     *
     * @return integer 
     */
    public function getNumCommande()
    {
        return $this->numCommande;
    }

    /**
     * Add idLivraison
     *
     * @param \VieilleSardine\LivraisonBundle\Entity\Livraison $idLivraison
     * @return BonDePreparation
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
     * Set emplacement
     *
     * @param \VieilleSardine\StockBundle\Entity\Emplacement $emplacement
     * @return BonDePreparation
     */
    public function setEmplacement(\VieilleSardine\StockBundle\Entity\Emplacement $emplacement = null)
    {
        $this->emplacement = $emplacement;
    
        return $this;
    }

    /**
     * Get emplacement
     *
     * @return \VieilleSardine\StockBundle\Entity\Emplacement 
     */
    public function getEmplacement()
    {
        return $this->emplacement;
    }
}