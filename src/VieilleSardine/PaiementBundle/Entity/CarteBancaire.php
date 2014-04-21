<?php

namespace VieilleSardine\PaiementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CarteBancaire
 *
 * @ORM\Table(name="carte_bancaire")
 * @ORM\Entity(repositoryClass="VieilleSardine\PaiementBundle\Entity\CarteBancaireRepository")
 */
class CarteBancaire
{
    /**
     * @var integer
     *
     * @ORM\Column(name="num_carte", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $numCarte;

    /**
     * @var integer
     *
     * @ORM\Column(name="type_carte", type="integer", nullable=false)
     */
    private $typeCarte;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_expiration", type="date", nullable=false)
     */
    private $dateExpiration;

    /**
     * @var integer
     *
     * @ORM\Column(name="cryptogramme", type="integer", nullable=false)
     */
    private $cryptogramme;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="VieilleSardine\UserBundle\Entity\Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_client", referencedColumnName="id_client")
     * })
     */
    private $idClient;



    /**
     * Get numCarte
     *
     * @return integer 
     */
    public function getNumCarte()
    {
        return $this->numCarte;
    }

    /**
     * Set typeCarte
     *
     * @param integer $typeCarte
     * @return CarteBancaire
     */
    public function setTypeCarte($typeCarte)
    {
        $this->typeCarte = $typeCarte;
    
        return $this;
    }

    /**
     * Get typeCarte
     *
     * @return integer 
     */
    public function getTypeCarte()
    {
        return $this->typeCarte;
    }

    /**
     * Set dateExpiration
     *
     * @param \DateTime $dateExpiration
     * @return CarteBancaire
     */
    public function setDateExpiration($dateExpiration)
    {
        $this->dateExpiration = $dateExpiration;
    
        return $this;
    }

    /**
     * Get dateExpiration
     *
     * @return \DateTime 
     */
    public function getDateExpiration()
    {
        return $this->dateExpiration;
    }

    /**
     * Set cryptogramme
     *
     * @param integer $cryptogramme
     * @return CarteBancaire
     */
    public function setCryptogramme($cryptogramme)
    {
        $this->cryptogramme = $cryptogramme;
    
        return $this;
    }

    /**
     * Get cryptogramme
     *
     * @return integer 
     */
    public function getCryptogramme()
    {
        return $this->cryptogramme;
    }

    /**
     * Set idClient
     *
     * @param \VieilleSardine\PaiementBundle\Entity\Client $idClient
     * @return CarteBancaire
     */
    public function setIdClient(\VieilleSardine\PaiementBundle\Entity\Client $idClient = null)
    {
        $this->idClient = $idClient;
    
        return $this;
    }

    /**
     * Get idClient
     *
     * @return \VieilleSardine\PaiementBundle\Entity\Client 
     */
    public function getIdClient()
    {
        return $this->idClient;
    }
}