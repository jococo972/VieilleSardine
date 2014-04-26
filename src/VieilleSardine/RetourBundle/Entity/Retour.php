<?php

namespace VieilleSardine\RetourBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Retour
 *
 * @ORM\Table(name="retour")
 * @ORM\Entity(repositoryClass="VieilleSardine\RetourBundle\Entity\RetourRepository")
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
     * @ORM\Column(name="numero", type="string", length=20, nullable=false)
     */
    private $numero;

    /**
     * @var integer
     *
     * @ORM\Column(name="statut", type="integer", nullable=false)
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
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="motif", type="integer", nullable=false)
     */
    private $motif;

    /**
     * @var boolean
     *
     * @ORM\Column(name="modalites", type="boolean", nullable=false)
     */
    private $modalites;

    /**
     * @var boolean
     *
     * @ORM\Column(name="draft", type="boolean", nullable=false)
     */
    private $draft;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="VieilleSardine\LivraisonBundle\Entity\Colis", inversedBy="idRetour")
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
     * @ORM\ManyToMany(targetEntity="VieilleSardine\UserBundle\Entity\Client", inversedBy="idRetour")
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
     * @ORM\ManyToOne(targetEntity="VieilleSardine\CommandeBundle\Entity\Commande")
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
     * Set numero
     *
     * @param string $numero
     * @return Retour
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    
        return $this;
    }

    /**
     * Get numero
     *
     * @return string 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set statut
     *
     * @param integer $statut
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
     * @return integer 
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
     * Set date
     *
     * @param \DateTime $date
     * @return Retour
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set motif
     *
     * @param integer $motif
     * @return Retour
     */
    public function setMotif($motif)
    {
        $this->motif = $motif;
    
        return $this;
    }

    /**
     * Get motif
     *
     * @return integer 
     */
    public function getMotif()
    {
        return $this->motif;
    }

    /**
     * Set modalites
     *
     * @param boolean $modalites
     * @return Retour
     */
    public function setModalites($modalites)
    {
        $this->modalites = $modalites;
    
        return $this;
    }

    /**
     * Get modalites
     *
     * @return boolean 
     */
    public function getModalites()
    {
        return $this->modalites;
    }

    /**
     * Set draft
     *
     * @param boolean $draft
     * @return Retour
     */
    public function setDraft($draft)
    {
        $this->draft = $draft;
    
        return $this;
    }

    /**
     * Get draft
     *
     * @return boolean 
     */
    public function getDraft()
    {
        return $this->draft;
    }

    /**
     * Add idColis
     *
     * @param \VieilleSardine\LivraisonBundle\Entity\Colis $idColis
     * @return Retour
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
     * Add idClient
     *
     * @param \VieilleSardine\UserBundle\Entity\Client $idClient
     * @return Retour
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