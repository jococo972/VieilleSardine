<?php

namespace VieilleSardine\LivraisonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etiquette
 *
 * @ORM\Table(name="etiquette")
 * @ORM\Entity(repositoryClass="VieilleSardine\LivraisonBundle\Entity\EtiquetteRepository")
 */
class Etiquette
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_etiquette", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEtiquette;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse_livraison", type="text", nullable=false)
     */
    private $adresseLivraison;

    /**
     * @var \Colis
     *
     * @ORM\ManyToOne(targetEntity="Colis")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_colis", referencedColumnName="id_colis")
     * })
     */
    private $idColis;



    /**
     * Get idEtiquette
     *
     * @return integer 
     */
    public function getIdEtiquette()
    {
        return $this->idEtiquette;
    }

    /**
     * Set adresseLivraison
     *
     * @param string $adresseLivraison
     * @return Etiquette
     */
    public function setAdresseLivraison($adresseLivraison)
    {
        $this->adresseLivraison = $adresseLivraison;
    
        return $this;
    }

    /**
     * Get adresseLivraison
     *
     * @return string 
     */
    public function getAdresseLivraison()
    {
        return $this->adresseLivraison;
    }

    /**
     * Set idColis
     *
     * @param \VieilleSardine\LivraisonBundle\Entity\Colis $idColis
     * @return Etiquette
     */
    public function setIdColis(\VieilleSardine\LivraisonBundle\Entity\Colis $idColis = null)
    {
        $this->idColis = $idColis;
    
        return $this;
    }

    /**
     * Get idColis
     *
     * @return \VieilleSardine\LivraisonBundle\Entity\Colis 
     */
    public function getIdColis()
    {
        return $this->idColis;
    }
}