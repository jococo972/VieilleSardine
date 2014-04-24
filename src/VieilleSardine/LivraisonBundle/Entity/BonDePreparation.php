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
     * @ORM\Column(name="num_commande", type="integer", nullable=false)
     */
    private $numCommande;

    /**
     * @var string
     *
     * @ORM\Column(name="etat_bon_de_preparation", type="string", nullable=false)
     */
    private $etatBonDePreparation;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="VieilleSardine\CommandeBundle\Entity\Lignes", inversedBy="idBonPreparation")
     * @ORM\JoinTable(name="bon_de_preparation_contient_lignes",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_bon_preparation", referencedColumnName="id_bon_preparation")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_ligne", referencedColumnName="id_ligne")
     *   }
     * )
     */
    private $idLigne;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Livraison", mappedBy="idBonPreparation")
     */
    private $idLivraison;

    /**
     * @var \Preparateur
     *
     * @ORM\ManyToOne(targetEntity="Preparateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_preparateur", referencedColumnName="id_preparateur")
     * })
     */
    private $idPreparateur;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idLigne = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set etatBonDePreparation
     *
     * @param string $etatBonDePreparation
     * @return BonDePreparation
     */
    public function setEtatBonDePreparation($etatBonDePreparation)
    {
        $this->etatBonDePreparation = $etatBonDePreparation;
    
        return $this;
    }

    /**
     * Get etatBonDePreparation
     *
     * @return string 
     */
    public function getEtatBonDePreparation()
    {
        return $this->etatBonDePreparation;
    }

    /**
     * Add idLigne
     *
     * @param \VieilleSardine\LivraisonBundle\Entity\Lignes $idLigne
     * @return BonDePreparation
     */
    public function addIdLigne(\VieilleSardine\LivraisonBundle\Entity\Lignes $idLigne)
    {
        $this->idLigne[] = $idLigne;
    
        return $this;
    }

    /**
     * Remove idLigne
     *
     * @param \VieilleSardine\LivraisonBundle\Entity\Lignes $idLigne
     */
    public function removeIdLigne(\VieilleSardine\LivraisonBundle\Entity\Lignes $idLigne)
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
     * Set idPreparateur
     *
     * @param \VieilleSardine\LivraisonBundle\Entity\Preparateur $idPreparateur
     * @return BonDePreparation
     */
    public function setIdPreparateur(\VieilleSardine\LivraisonBundle\Entity\Preparateur $idPreparateur = null)
    {
        $this->idPreparateur = $idPreparateur;
    
        return $this;
    }

    /**
     * Get idPreparateur
     *
     * @return \VieilleSardine\LivraisonBundle\Entity\Preparateur 
     */
    public function getIdPreparateur()
    {
        return $this->idPreparateur;
    }
}