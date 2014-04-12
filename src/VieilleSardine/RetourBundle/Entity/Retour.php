<?php

namespace VieilleSardine\RetourBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Retour
 *
 * @ORM\Table(name="retour")
 * @ORM\Entity
 */
class Retour
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_retour", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idRetour;

    /**
     * @var string
     *
     * @ORM\Column(name="statut", type="string", length=20, nullable=false)
     */
    private $statut;

    /**
     * @var boolean
     *
     * @ORM\Column(name="est_valide", type="boolean", nullable=false)
     */
    private $estValide;

    /**
     * @var boolean
     *
     * @ORM\Column(name="est_clos", type="boolean", nullable=false)
     */
    private $estClos;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Colis", inversedBy="idRetour")
     * @ORM\JoinTable(name="retour_concerne_colis",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_retour", referencedColumnName="id_retour")
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
     * @ORM\ManyToMany(targetEntity="Client", inversedBy="idRetour")
     * @ORM\JoinTable(name="retour_par_client",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_retour", referencedColumnName="id_retour")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_client", referencedColumnName="id_client")
     *   }
     * )
     */
    private $idClient;

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
        $this->idClient = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    /**
     * Get idRetour
     *
     * @return integer 
     */
    public function getIdRetour()
    {
        return $this->idRetour;
    }

    /**
     * Set statut
     *
     * @param string $statut
     * @return Retour
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
     * Set estValide
     *
     * @param boolean $estValide
     * @return Retour
     */
    public function setEstValide($estValide)
    {
        $this->estValide = $estValide;
    
        return $this;
    }

    /**
     * Get estValide
     *
     * @return boolean 
     */
    public function getEstValide()
    {
        return $this->estValide;
    }

    /**
     * Set estClos
     *
     * @param boolean $estClos
     * @return Retour
     */
    public function setEstClos($estClos)
    {
        $this->estClos = $estClos;
    
        return $this;
    }

    /**
     * Get estClos
     *
     * @return boolean 
     */
    public function getEstClos()
    {
        return $this->estClos;
    }

    /**
     * Add idColis
     *
     * @param \VieilleSardine\RetourBundle\Entity\Colis $idColis
     * @return Retour
     */
    public function addIdColi(\VieilleSardine\RetourBundle\Entity\Colis $idColis)
    {
        $this->idColis[] = $idColis;
    
        return $this;
    }

    /**
     * Remove idColis
     *
     * @param \VieilleSardine\RetourBundle\Entity\Colis $idColis
     */
    public function removeIdColi(\VieilleSardine\RetourBundle\Entity\Colis $idColis)
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
     * Add idClient
     *
     * @param \VieilleSardine\RetourBundle\Entity\Client $idClient
     * @return Retour
     */
    public function addIdClient(\VieilleSardine\RetourBundle\Entity\Client $idClient)
    {
        $this->idClient[] = $idClient;
    
        return $this;
    }

    /**
     * Remove idClient
     *
     * @param \VieilleSardine\RetourBundle\Entity\Client $idClient
     */
    public function removeIdClient(\VieilleSardine\RetourBundle\Entity\Client $idClient)
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

    /**
     * Set idCommande
     *
     * @param \VieilleSardine\RetourBundle\Entity\Commande $idCommande
     * @return Retour
     */
    public function setIdCommande(\VieilleSardine\RetourBundle\Entity\Commande $idCommande = null)
    {
        $this->idCommande = $idCommande;
    
        return $this;
    }

    /**
     * Get idCommande
     *
     * @return \VieilleSardine\RetourBundle\Entity\Commande 
     */
    public function getIdCommande()
    {
        return $this->idCommande;
    }
}