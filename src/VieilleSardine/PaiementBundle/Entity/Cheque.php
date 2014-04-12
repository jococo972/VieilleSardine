<?php

namespace VieilleSardine\PaiementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cheque
 *
 * @ORM\Table(name="cheque")
 * @ORM\Entity(repositoryClass="VieilleSardine\PaiementBundle\Entity\ChequeRepository")
 */
class Cheque
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_cheque", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCheque;

    /**
     * @var integer
     *
     * @ORM\Column(name="num_cheque", type="integer", nullable=false)
     */
    private $numCheque;

    /**
     * @var string
     *
     * @ORM\Column(name="num_compte", type="string", length=40, nullable=false)
     */
    private $numCompte;

    /**
     * @var \MoyenDePaiement
     *
     * @ORM\ManyToOne(targetEntity="MoyenDePaiement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_paiement", referencedColumnName="id_paiement")
     * })
     */
    private $idPaiement;



    /**
     * Get idCheque
     *
     * @return integer 
     */
    public function getIdCheque()
    {
        return $this->idCheque;
    }

    /**
     * Set numCheque
     *
     * @param integer $numCheque
     * @return Cheque
     */
    public function setNumCheque($numCheque)
    {
        $this->numCheque = $numCheque;
    
        return $this;
    }

    /**
     * Get numCheque
     *
     * @return integer 
     */
    public function getNumCheque()
    {
        return $this->numCheque;
    }

    /**
     * Set numCompte
     *
     * @param string $numCompte
     * @return Cheque
     */
    public function setNumCompte($numCompte)
    {
        $this->numCompte = $numCompte;
    
        return $this;
    }

    /**
     * Get numCompte
     *
     * @return string 
     */
    public function getNumCompte()
    {
        return $this->numCompte;
    }

    /**
     * Set idPaiement
     *
     * @param \VieilleSardine\PaiementBundle\Entity\MoyenDePaiement $idPaiement
     * @return Cheque
     */
    public function setIdPaiement(\VieilleSardine\PaiementBundle\Entity\MoyenDePaiement $idPaiement = null)
    {
        $this->idPaiement = $idPaiement;
    
        return $this;
    }

    /**
     * Get idPaiement
     *
     * @return \VieilleSardine\PaiementBundle\Entity\MoyenDePaiement 
     */
    public function getIdPaiement()
    {
        return $this->idPaiement;
    }
}