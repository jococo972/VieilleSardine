<?php

namespace VieilleSardine\PaiementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MoyenDePaiement
 *
 * @ORM\Table(name="moyen_de_paiement")
 * @ORM\Entity(repositoryClass="VieilleSardine\PaiementBundle\Entity\MoyenDePaiementRepository")
 */
class MoyenDePaiement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_paiement", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPaiement;

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
     * Get idPaiement
     *
     * @return integer 
     */
    public function getIdPaiement()
    {
        return $this->idPaiement;
    }

    /**
     * Set idCommande
     *
     * @param \VieilleSardine\PaiementBundle\Entity\Commande $idCommande
     * @return MoyenDePaiement
     */
    public function setIdCommande(\VieilleSardine\PaiementBundle\Entity\Commande $idCommande = null)
    {
        $this->idCommande = $idCommande;
    
        return $this;
    }

    /**
     * Get idCommande
     *
     * @return \VieilleSardine\PaiementBundle\Entity\Commande 
     */
    public function getIdCommande()
    {
        return $this->idCommande;
    }
}