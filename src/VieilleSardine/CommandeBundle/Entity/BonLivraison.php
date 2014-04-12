<?php

namespace VieilleSardine\CommandeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BonLivraison
 *
 * @ORM\Table(name="bon_livraison")
 * @ORM\Entity(repositoryClass="VieilleSardine\CommandeBundle\Entity\BonLivraisonRepository")
 */
class BonLivraison
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_bon_livraison", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idBonLivraison;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_livraison", type="date", nullable=false)
     */
    private $dateLivraison;

    /**
     * @var float
     *
     * @ORM\Column(name="montant_commande", type="float", nullable=false)
     */
    private $montantCommande;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_client", type="string", length=50, nullable=false)
     */
    private $nomClient;

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
     * Get idBonLivraison
     *
     * @return integer 
     */
    public function getIdBonLivraison()
    {
        return $this->idBonLivraison;
    }

    /**
     * Set dateLivraison
     *
     * @param \DateTime $dateLivraison
     * @return BonLivraison
     */
    public function setDateLivraison($dateLivraison)
    {
        $this->dateLivraison = $dateLivraison;
    
        return $this;
    }

    /**
     * Get dateLivraison
     *
     * @return \DateTime 
     */
    public function getDateLivraison()
    {
        return $this->dateLivraison;
    }

    /**
     * Set montantCommande
     *
     * @param float $montantCommande
     * @return BonLivraison
     */
    public function setMontantCommande($montantCommande)
    {
        $this->montantCommande = $montantCommande;
    
        return $this;
    }

    /**
     * Get montantCommande
     *
     * @return float 
     */
    public function getMontantCommande()
    {
        return $this->montantCommande;
    }

    /**
     * Set nomClient
     *
     * @param string $nomClient
     * @return BonLivraison
     */
    public function setNomClient($nomClient)
    {
        $this->nomClient = $nomClient;
    
        return $this;
    }

    /**
     * Get nomClient
     *
     * @return string 
     */
    public function getNomClient()
    {
        return $this->nomClient;
    }

    /**
     * Set idCommande
     *
     * @param \VieilleSardine\CommandeBundle\Entity\Commande $idCommande
     * @return BonLivraison
     */
    public function setIdCommande(\VieilleSardine\CommandeBundle\Entity\Commande $idCommande = null)
    {
        $this->idCommande = $idCommande;
    
        return $this;
    }

    /**
     * Get idCommande
     *
     * @return \VieilleSardine\CommandeBundle\Entity\Commande 
     */
    public function getIdCommande()
    {
        return $this->idCommande;
    }
}