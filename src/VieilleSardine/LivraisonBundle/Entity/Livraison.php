<?php

namespace VieilleSardine\LivraisonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Livraison
 *
 * @ORM\Table(name="livraison")
 * @ORM\Entity
 */
class Livraison
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_livraison", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idLivraison;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_expedition", type="date", nullable=false)
     */
    private $dateExpedition;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_reception", type="date", nullable=false)
     */
    private $dateReception;

    /**
     * @var string
     *
     * @ORM\Column(name="mode_livraison", type="string", nullable=true)
     */
    private $modeLivraison;

    /**
     * @var string
     *
     * @ORM\Column(name="etat_livraison", type="string", nullable=false)
     */
    private $etatLivraison;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Colis", inversedBy="idLivraison")
     * @ORM\JoinTable(name="livraison_colis",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_livraison", referencedColumnName="id_livraison")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_colis", referencedColumnName="id_colis")
     *   }
     * )
     */
    private $idColis;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Evenement", inversedBy="idLivraison")
     * @ORM\JoinTable(name="livraison_concernepar_evenement",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_livraison", referencedColumnName="id_livraison")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_evenement", referencedColumnName="id_evenement")
     *   }
     * )
     */
    private $idEvenement;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="BonDePreparation", inversedBy="idLivraison")
     * @ORM\JoinTable(name="livraison_possede_bondepreparation",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_livraison", referencedColumnName="id_livraison")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_bon_preparation", referencedColumnName="id_bon_preparation")
     *   }
     * )
     */
    private $idBonPreparation;

    /**
     * @var \Coliseur
     *
     * @ORM\ManyToOne(targetEntity="Coliseur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_coliseur", referencedColumnName="id_coliseur")
     * })
     */
    private $idColiseur;

    /**
     * @var \Commande
     *
     * @ORM\ManyToOne(targetEntity="Commande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_commande", referencedColumnName="id_commande")
     * })
     */
    private $idCommande;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idColis = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idEvenement = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idBonPreparation = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    /**
     * Get idLivraison
     *
     * @return integer 
     */
    public function getIdLivraison()
    {
        return $this->idLivraison;
    }

    /**
     * Set dateExpedition
     *
     * @param \DateTime $dateExpedition
     * @return Livraison
     */
    public function setDateExpedition($dateExpedition)
    {
        $this->dateExpedition = $dateExpedition;
    
        return $this;
    }

    /**
     * Get dateExpedition
     *
     * @return \DateTime 
     */
    public function getDateExpedition()
    {
        return $this->dateExpedition;
    }

    /**
     * Set dateReception
     *
     * @param \DateTime $dateReception
     * @return Livraison
     */
    public function setDateReception($dateReception)
    {
        $this->dateReception = $dateReception;
    
        return $this;
    }

    /**
     * Get dateReception
     *
     * @return \DateTime 
     */
    public function getDateReception()
    {
        return $this->dateReception;
    }

    /**
     * Set modeLivraison
     *
     * @param string $modeLivraison
     * @return Livraison
     */
    public function setModeLivraison($modeLivraison)
    {
        $this->modeLivraison = $modeLivraison;
    
        return $this;
    }

    /**
     * Get modeLivraison
     *
     * @return string 
     */
    public function getModeLivraison()
    {
        return $this->modeLivraison;
    }

    /**
     * Set etatLivraison
     *
     * @param string $etatLivraison
     * @return Livraison
     */
    public function setEtatLivraison($etatLivraison)
    {
        $this->etatLivraison = $etatLivraison;
    
        return $this;
    }

    /**
     * Get etatLivraison
     *
     * @return string 
     */
    public function getEtatLivraison()
    {
        return $this->etatLivraison;
    }

    /**
     * Add idColis
     *
     * @param \VieilleSardine\LivraisonBundle\Entity\Colis $idColis
     * @return Livraison
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
     * Add idEvenement
     *
     * @param \VieilleSardine\LivraisonBundle\Entity\Evenement $idEvenement
     * @return Livraison
     */
    public function addIdEvenement(\VieilleSardine\LivraisonBundle\Entity\Evenement $idEvenement)
    {
        $this->idEvenement[] = $idEvenement;
    
        return $this;
    }

    /**
     * Remove idEvenement
     *
     * @param \VieilleSardine\LivraisonBundle\Entity\Evenement $idEvenement
     */
    public function removeIdEvenement(\VieilleSardine\LivraisonBundle\Entity\Evenement $idEvenement)
    {
        $this->idEvenement->removeElement($idEvenement);
    }

    /**
     * Get idEvenement
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdEvenement()
    {
        return $this->idEvenement;
    }

    /**
     * Add idBonPreparation
     *
     * @param \VieilleSardine\LivraisonBundle\Entity\BonDePreparation $idBonPreparation
     * @return Livraison
     */
    public function addIdBonPreparation(\VieilleSardine\LivraisonBundle\Entity\BonDePreparation $idBonPreparation)
    {
        $this->idBonPreparation[] = $idBonPreparation;
    
        return $this;
    }

    /**
     * Remove idBonPreparation
     *
     * @param \VieilleSardine\LivraisonBundle\Entity\BonDePreparation $idBonPreparation
     */
    public function removeIdBonPreparation(\VieilleSardine\LivraisonBundle\Entity\BonDePreparation $idBonPreparation)
    {
        $this->idBonPreparation->removeElement($idBonPreparation);
    }

    /**
     * Get idBonPreparation
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdBonPreparation()
    {
        return $this->idBonPreparation;
    }

    /**
     * Set idColiseur
     *
     * @param \VieilleSardine\LivraisonBundle\Entity\Coliseur $idColiseur
     * @return Livraison
     */
    public function setIdColiseur(\VieilleSardine\LivraisonBundle\Entity\Coliseur $idColiseur = null)
    {
        $this->idColiseur = $idColiseur;
    
        return $this;
    }

    /**
     * Get idColiseur
     *
     * @return \VieilleSardine\LivraisonBundle\Entity\Coliseur 
     */
    public function getIdColiseur()
    {
        return $this->idColiseur;
    }

    /**
     * Set idCommande
     *
     * @param \VieilleSardine\LivraisonBundle\Entity\Commande $idCommande
     * @return Livraison
     */
    public function setIdCommande(\VieilleSardine\LivraisonBundle\Entity\Commande $idCommande = null)
    {
        $this->idCommande = $idCommande;
    
        return $this;
    }

    /**
     * Get idCommande
     *
     * @return \VieilleSardine\LivraisonBundle\Entity\Commande 
     */
    public function getIdCommande()
    {
        return $this->idCommande;
    }
}