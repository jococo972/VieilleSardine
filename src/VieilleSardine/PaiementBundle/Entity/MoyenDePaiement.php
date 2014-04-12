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
     * @var integer
     *
     * @ORM\Column(name="id_commande", type="integer", nullable=false)
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
     * @param integer $idCommande
     * @return MoyenDePaiement
     */
    public function setIdCommande($idCommande)
    {
        $this->idCommande = $idCommande;
    
        return $this;
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
}