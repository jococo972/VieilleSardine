<?php

namespace VieilleSardine\PanierBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Panier
 *
 * @ORM\Table(name="panier")
 * @ORM\Entity(repositoryClass="VieilleSardine\PanierBundle\Entity\PanierRepository")
 */
class Panier
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_panier", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPanier;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Lignes", inversedBy="idPanier")
     * @ORM\JoinTable(name="panier_contient_ligne",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_panier", referencedColumnName="id_panier")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_ligne", referencedColumnName="id_ligne")
     *   }
     * )
     */
    private $idLigne;

    /**
     * @var \Client
     *
     * @ORM\ManyToOne(targetEntity="Client")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_client", referencedColumnName="id_client")
     * })
     */
    private $idClient;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idLigne = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    /**
     * Get idPanier
     *
     * @return integer 
     */
    public function getIdPanier()
    {
        return $this->idPanier;
    }

    /**
     * Add idLigne
     *
     * @param \VieilleSardine\PanierBundle\Entity\Lignes $idLigne
     * @return Panier
     */
    public function addIdLigne(\VieilleSardine\PanierBundle\Entity\Lignes $idLigne)
    {
        $this->idLigne[] = $idLigne;
    
        return $this;
    }

    /**
     * Remove idLigne
     *
     * @param \VieilleSardine\PanierBundle\Entity\Lignes $idLigne
     */
    public function removeIdLigne(\VieilleSardine\PanierBundle\Entity\Lignes $idLigne)
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
     * Set idClient
     *
     * @param \VieilleSardine\PanierBundle\Entity\Client $idClient
     * @return Panier
     */
    public function setIdClient(\VieilleSardine\PanierBundle\Entity\Client $idClient = null)
    {
        $this->idClient = $idClient;
    
        return $this;
    }

    /**
     * Get idClient
     *
     * @return \VieilleSardine\PanierBundle\Entity\Client 
     */
    public function getIdClient()
    {
        return $this->idClient;
    }
}