<?php

namespace VieilleSardine\CommandeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 *
 * @ORM\Table(name="commande")
 * @ORM\Entity(repositoryClass="VieilleSardine\CommandeBundle\Entity\CommandeRepository")
 */
class Commande
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_commande", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCommande;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_commande", type="date", nullable=false)
     */
    private $dateCommande;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float", nullable=false)
     */
    private $montant;

    /**
     * @var string
     *
     * @ORM\Column(name="etat_commande", type="string", length=20, nullable=false)
     */
    private $etatCommande;

    /**
     * @var string
     *
     * @ORM\Column(name="pourcentage_remise", type="string", nullable=false)
     */
    private $pourcentageRemise;

    /**
     * @var boolean
     *
     * @ORM\Column(name="est_groupee", type="boolean", nullable=false)
     */
    private $estGroupee;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="VieilleSardine\LivraisonBundle\Entity\Colis", inversedBy="idCommande")
     * @ORM\JoinTable(name="commande_constituee_colis",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_commande", referencedColumnName="id_commande")
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
     * @ORM\ManyToMany(targetEntity="Lignes", inversedBy="idCommande")
     * @ORM\JoinTable(name="commande_contient_lignes",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_commande", referencedColumnName="id_commande")
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
     * @ORM\ManyToMany(targetEntity="VieilleSardine\UserBundle\Entity\Client", mappedBy="idCommande")
     */
    private $idClient;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idColis = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idLigne = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idClient = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    /**
     * Get idCommande
     *
     * @return integer 
     */
    public function getIdCommande()
    {
        return $this->idCommande;
    }

    /**
     * Set dateCommande
     *
     * @param \DateTime $dateCommande
     * @return Commande
     */
    public function setDateCommande($dateCommande)
    {
        $this->dateCommande = $dateCommande;
    
        return $this;
    }

    /**
     * Get dateCommande
     *
     * @return \DateTime 
     */
    public function getDateCommande()
    {
        return $this->dateCommande;
    }

    /**
     * Set montant
     *
     * @param float $montant
     * @return Commande
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;
    
        return $this;
    }

    /**
     * Get montant
     *
     * @return float 
     */
    public function getMontant()
    {
        return $this->montant;
    }

    /**
     * Set etatCommande
     *
     * @param string $etatCommande
     * @return Commande
     */
    public function setEtatCommande($etatCommande)
    {
        $this->etatCommande = $etatCommande;
    
        return $this;
    }

    /**
     * Get etatCommande
     *
     * @return string 
     */
    public function getEtatCommande()
    {
        return $this->etatCommande;
    }

    /**
     * Set pourcentageRemise
     *
     * @param string $pourcentageRemise
     * @return Commande
     */
    public function setPourcentageRemise($pourcentageRemise)
    {
        $this->pourcentageRemise = $pourcentageRemise;
    
        return $this;
    }

    /**
     * Get pourcentageRemise
     *
     * @return string 
     */
    public function getPourcentageRemise()
    {
        return $this->pourcentageRemise;
    }

    /**
     * Set estGroupee
     *
     * @param boolean $estGroupee
     * @return Commande
     */
    public function setEstGroupee($estGroupee)
    {
        $this->estGroupee = $estGroupee;
    
        return $this;
    }

    /**
     * Get estGroupee
     *
     * @return boolean 
     */
    public function getEstGroupee()
    {
        return $this->estGroupee;
    }

    /**
     * Add idColis
     *
     * @param \VieilleSardine\LivraisonBundle\Entity\Colis $idColis
     * @return Commande
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
     * Add idLigne
     *
     * @param \VieilleSardine\CommandeBundle\Entity\Lignes $idLigne
     * @return Commande
     */
    public function addIdLigne(\VieilleSardine\CommandeBundle\Entity\Lignes $idLigne)
    {
        $this->idLigne[] = $idLigne;
    
        return $this;
    }

    /**
     * Remove idLigne
     *
     * @param \VieilleSardine\CommandeBundle\Entity\Lignes $idLigne
     */
    public function removeIdLigne(\VieilleSardine\CommandeBundle\Entity\Lignes $idLigne)
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
     * Add idClient
     *
     * @param \VieilleSardine\UserBundle\Entity\Client $idClient
     * @return Commande
     */
    public function addIdClient(\VieilleSardine\UserBundle\Entity\Client $idClient)
    {
        $this->idClient[] = $idClient;
    
        return $this;
    }

    /**
     * Remove idClient
     *
     * @param \VieilleSardine\UserBundle\Entity\Client $idClient
     */
    public function removeIdClient(\VieilleSardine\UserBundle\Entity\Client $idClient)
    {
        $this->idClient->removeElement($idClient);
    }

    /**
     * Get idClient
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdClient()
    {
        return $this->idClient;
    }
}