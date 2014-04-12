<?php

namespace VieilleSardine\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="VieilleSardine\UserBundle\Entity\ClientRepository")
 */
class Client
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_client", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idClient;

    /**
     * @var string
     *
     * @ORM\Column(name="civilite", type="string", length=5, nullable=false)
     */
    private $civilite;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=20, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=20, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="tel_principal", type="string", length=15, nullable=false)
     */
    private $telPrincipal;

    /**
     * @var string
     *
     * @ORM\Column(name="tel_secondaire", type="string", length=15, nullable=false)
     */
    private $telSecondaire;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=1, nullable=false)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_voie", type="string", length=5, nullable=false)
     */
    private $numeroVoie;

    /**
     * @var string
     *
     * @ORM\Column(name="type_voie", type="string", length=15, nullable=false)
     */
    private $typeVoie;

    /**
     * @var string
     *
     * @ORM\Column(name="code_postal", type="string", length=8, nullable=false)
     */
    private $codePostal;

    /**
     * @var string
     *
     * @ORM\Column(name="ville", type="string", length=15, nullable=false)
     */
    private $ville;

    /**
     * @var string
     *
     * @ORM\Column(name="pays", type="string", length=15, nullable=false)
     */
    private $pays;

    /**
     * @var integer
     *
     * @ORM\Column(name="client_a_livrer", type="integer", nullable=false)
     */
    private $clientALivrer;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Commande", inversedBy="idClient")
     * @ORM\JoinTable(name="commande_passee_livree",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_client", referencedColumnName="id_client")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_commande", referencedColumnName="id_commande")
     *   }
     * )
     */
    private $idCommande;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Retour", mappedBy="idClient")
     */
    private $idRetour;

    /**
     * @var \CompteClient
     *
     * @ORM\ManyToOne(targetEntity="CompteClient")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_compte_client", referencedColumnName="id_compte_client")
     * })
     */
    private $idCompteClient;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idCommande = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idRetour = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    /**
     * Get idClient
     *
     * @return integer 
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * Set civilite
     *
     * @param string $civilite
     * @return Client
     */
    public function setCivilite($civilite)
    {
        $this->civilite = $civilite;
    
        return $this;
    }

    /**
     * Get civilite
     *
     * @return string 
     */
    public function getCivilite()
    {
        return $this->civilite;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Client
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    
        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     * @return Client
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    
        return $this;
    }

    /**
     * Get prenom
     *
     * @return string 
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set telPrincipal
     *
     * @param string $telPrincipal
     * @return Client
     */
    public function setTelPrincipal($telPrincipal)
    {
        $this->telPrincipal = $telPrincipal;
    
        return $this;
    }

    /**
     * Get telPrincipal
     *
     * @return string 
     */
    public function getTelPrincipal()
    {
        return $this->telPrincipal;
    }

    /**
     * Set telSecondaire
     *
     * @param string $telSecondaire
     * @return Client
     */
    public function setTelSecondaire($telSecondaire)
    {
        $this->telSecondaire = $telSecondaire;
    
        return $this;
    }

    /**
     * Get telSecondaire
     *
     * @return string 
     */
    public function getTelSecondaire()
    {
        return $this->telSecondaire;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     * @return Client
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    
        return $this;
    }

    /**
     * Get sexe
     *
     * @return string 
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set numeroVoie
     *
     * @param string $numeroVoie
     * @return Client
     */
    public function setNumeroVoie($numeroVoie)
    {
        $this->numeroVoie = $numeroVoie;
    
        return $this;
    }

    /**
     * Get numeroVoie
     *
     * @return string 
     */
    public function getNumeroVoie()
    {
        return $this->numeroVoie;
    }

    /**
     * Set typeVoie
     *
     * @param string $typeVoie
     * @return Client
     */
    public function setTypeVoie($typeVoie)
    {
        $this->typeVoie = $typeVoie;
    
        return $this;
    }

    /**
     * Get typeVoie
     *
     * @return string 
     */
    public function getTypeVoie()
    {
        return $this->typeVoie;
    }

    /**
     * Set codePostal
     *
     * @param string $codePostal
     * @return Client
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;
    
        return $this;
    }

    /**
     * Get codePostal
     *
     * @return string 
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }

    /**
     * Set ville
     *
     * @param string $ville
     * @return Client
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    
        return $this;
    }

    /**
     * Get ville
     *
     * @return string 
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set pays
     *
     * @param string $pays
     * @return Client
     */
    public function setPays($pays)
    {
        $this->pays = $pays;
    
        return $this;
    }

    /**
     * Get pays
     *
     * @return string 
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Set clientALivrer
     *
     * @param integer $clientALivrer
     * @return Client
     */
    public function setClientALivrer($clientALivrer)
    {
        $this->clientALivrer = $clientALivrer;
    
        return $this;
    }

    /**
     * Get clientALivrer
     *
     * @return integer 
     */
    public function getClientALivrer()
    {
        return $this->clientALivrer;
    }

    /**
     * Add idCommande
     *
     * @param \VieilleSardine\UserBundle\Entity\Commande $idCommande
     * @return Client
     */
    public function addIdCommande(\VieilleSardine\UserBundle\Entity\Commande $idCommande)
    {
        $this->idCommande[] = $idCommande;
    
        return $this;
    }

    /**
     * Remove idCommande
     *
     * @param \VieilleSardine\UserBundle\Entity\Commande $idCommande
     */
    public function removeIdCommande(\VieilleSardine\UserBundle\Entity\Commande $idCommande)
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
     * Add idRetour
     *
     * @param \VieilleSardine\UserBundle\Entity\Retour $idRetour
     * @return Client
     */
    public function addIdRetour(\VieilleSardine\UserBundle\Entity\Retour $idRetour)
    {
        $this->idRetour[] = $idRetour;
    
        return $this;
    }

    /**
     * Remove idRetour
     *
     * @param \VieilleSardine\UserBundle\Entity\Retour $idRetour
     */
    public function removeIdRetour(\VieilleSardine\UserBundle\Entity\Retour $idRetour)
    {
        $this->idRetour->removeElement($idRetour);
    }

    /**
     * Get idRetour
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdRetour()
    {
        return $this->idRetour;
    }

    /**
     * Set idCompteClient
     *
     * @param \VieilleSardine\UserBundle\Entity\CompteClient $idCompteClient
     * @return Client
     */
    public function setIdCompteClient(\VieilleSardine\UserBundle\Entity\CompteClient $idCompteClient = null)
    {
        $this->idCompteClient = $idCompteClient;
    
        return $this;
    }

    /**
     * Get idCompteClient
     *
     * @return \VieilleSardine\UserBundle\Entity\CompteClient 
     */
    public function getIdCompteClient()
    {
        return $this->idCompteClient;
    }
}