<?php

namespace VieilleSardine\CommandeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConfirmationDeCommande
 *
 * @ORM\Table(name="confirmation_de_commande")
 * @ORM\Entity(repositoryClass="VieilleSardine\CommandeBundle\Entity\ConfirmationDeCommandeRepository")
 */
class ConfirmationDeCommande
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_confirmation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idConfirmation;

    /**
     * @var string
     *
     * @ORM\Column(name="objet", type="string", length=50, nullable=false)
     */
    private $objet;

    /**
     * @var string
     *
     * @ORM\Column(name="destinataire", type="string", length=30, nullable=false)
     */
    private $destinataire;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="blob", nullable=false)
     */
    private $message;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_commande", type="date", nullable=false)
     */
    private $dateCommande;

    /**
     * @var float
     *
     * @ORM\Column(name="montant_commande", type="float", nullable=false)
     */
    private $montantCommande;

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
     * Get idConfirmation
     *
     * @return integer 
     */
    public function getIdConfirmation()
    {
        return $this->idConfirmation;
    }

    /**
     * Set objet
     *
     * @param string $objet
     * @return ConfirmationDeCommande
     */
    public function setObjet($objet)
    {
        $this->objet = $objet;
    
        return $this;
    }

    /**
     * Get objet
     *
     * @return string 
     */
    public function getObjet()
    {
        return $this->objet;
    }

    /**
     * Set destinataire
     *
     * @param string $destinataire
     * @return ConfirmationDeCommande
     */
    public function setDestinataire($destinataire)
    {
        $this->destinataire = $destinataire;
    
        return $this;
    }

    /**
     * Get destinataire
     *
     * @return string 
     */
    public function getDestinataire()
    {
        return $this->destinataire;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return ConfirmationDeCommande
     */
    public function setMessage($message)
    {
        $this->message = $message;
    
        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set dateCommande
     *
     * @param \DateTime $dateCommande
     * @return ConfirmationDeCommande
     */
    public function setDateCommande($dateCommande)
    {
        $this->dateCommande = $dateCommande;
    
        return $this;
    }

    /**
     * Get dateCommande
     *
     * @return \DateTime 
     */
    public function getDateCommande()
    {
        return $this->dateCommande;
    }

    /**
     * Set montantCommande
     *
     * @param float $montantCommande
     * @return ConfirmationDeCommande
     */
    public function setMontantCommande($montantCommande)
    {
        $this->montantCommande = $montantCommande;
    
        return $this;
    }

    /**
     * Get montantCommande
     *
     * @return float 
     */
    public function getMontantCommande()
    {
        return $this->montantCommande;
    }

    /**
     * Set idCommande
     *
     * @param \VieilleSardine\CommandeBundle\Entity\Commande $idCommande
     * @return ConfirmationDeCommande
     */
    public function setIdCommande(\VieilleSardine\CommandeBundle\Entity\Commande $idCommande = null)
    {
        $this->idCommande = $idCommande;
    
        return $this;
    }

    /**
     * Get idCommande
     *
     * @return \VieilleSardine\CommandeBundle\Entity\Commande 
     */
    public function getIdCommande()
    {
        return $this->idCommande;
    }
}