<?php

namespace VieilleSardine\PaiementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TransactionBancaire
 *
 * @ORM\Table(name="transaction_bancaire")
 * @ORM\Entity(repositoryClass="VieilleSardine\PaiementBundle\Entity\TransactionRepository")
 */
class TransactionBancaire
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_transaction", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idTransaction;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_transaction", type="date", nullable=false)
     */
    private $dateTransaction;

    /**
     * @var float
     *
     * @ORM\Column(name="montant_transaction", type="float", nullable=false)
     */
    private $montantTransaction;

    /**
     * @var string
     *
     * @ORM\Column(name="libele_commande", type="string", length=30, nullable=false)
     */
    private $libeleCommande;

    /**
     * @var boolean
     *
     * @ORM\Column(name="est_valide", type="boolean", nullable=false)
     */
    private $estValide;

    /**
     * @var boolean
     *
     * @ORM\Column(name="remboursement", type="boolean", nullable=false)
     */
    private $remboursement;

    /**
     * @var \CarteBancaire
     *
     * @ORM\ManyToOne(targetEntity="CarteBancaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="num_carte", referencedColumnName="num_carte")
     * })
     */
    private $numCarte;

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
     * Get idTransaction
     *
     * @return integer 
     */
    public function getIdTransaction()
    {
        return $this->idTransaction;
    }

    /**
     * Set dateTransaction
     *
     * @param \DateTime $dateTransaction
     * @return TransactionBancaire
     */
    public function setDateTransaction($dateTransaction)
    {
        $this->dateTransaction = $dateTransaction;
    
        return $this;
    }

    /**
     * Get dateTransaction
     *
     * @return \DateTime 
     */
    public function getDateTransaction()
    {
        return $this->dateTransaction;
    }

    /**
     * Set montantTransaction
     *
     * @param float $montantTransaction
     * @return TransactionBancaire
     */
    public function setMontantTransaction($montantTransaction)
    {
        $this->montantTransaction = $montantTransaction;
    
        return $this;
    }

    /**
     * Get montantTransaction
     *
     * @return float 
     */
    public function getMontantTransaction()
    {
        return $this->montantTransaction;
    }

    /**
     * Set libeleCommande
     *
     * @param string $libeleCommande
     * @return TransactionBancaire
     */
    public function setLibeleCommande($libeleCommande)
    {
        $this->libeleCommande = $libeleCommande;
    
        return $this;
    }

    /**
     * Get libeleCommande
     *
     * @return string 
     */
    public function getLibeleCommande()
    {
        return $this->libeleCommande;
    }

    /**
     * Set estValide
     *
     * @param boolean $estValide
     * @return TransactionBancaire
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
     * Set remboursement
     *
     * @param boolean $remboursement
     * @return TransactionBancaire
     */
    public function setRemboursement($remboursement)
    {
        $this->remboursement = $remboursement;
    
        return $this;
    }

    /**
     * Get remboursement
     *
     * @return boolean 
     */
    public function getRemboursement()
    {
        return $this->remboursement;
    }

    /**
     * Set numCarte
     *
     * @param \VieilleSardine\PaiementBundle\Entity\CarteBancaire $numCarte
     * @return TransactionBancaire
     */
    public function setNumCarte(\VieilleSardine\PaiementBundle\Entity\CarteBancaire $numCarte = null)
    {
        $this->numCarte = $numCarte;
    
        return $this;
    }

    /**
     * Get numCarte
     *
     * @return \VieilleSardine\PaiementBundle\Entity\CarteBancaire 
     */
    public function getNumCarte()
    {
        return $this->numCarte;
    }

    /**
     * Set idPaiement
     *
     * @param \VieilleSardine\PaiementBundle\Entity\MoyenDePaiement $idPaiement
     * @return TransactionBancaire
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