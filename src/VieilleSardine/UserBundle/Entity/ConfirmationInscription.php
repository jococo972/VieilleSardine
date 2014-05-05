<?php

namespace VieilleSardine\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConfirmationInscription
 *
 * @ORM\Table(name="confirmation_inscription")
 * @ORM\Entity(repositoryClass="VieilleSardine\UserBundle\Entity\ConfirmationInscriptionRepository")
 */
class ConfirmationInscription
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
     * @ORM\Column(name="objet", type="string", length=140, nullable=false)
     */
    private $objet;

    /**
     * @var string
     *
     * @ORM\Column(name="destinataire", type="string", length=30, nullable=false)
     */
    private $destinataire;

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
     * @return ConfirmationInscription
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
     * @return ConfirmationInscription
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
     * Set idClient
     *
     * @param \VieilleSardine\UserBundle\Entity\Client $idClient
     * @return ConfirmationInscription
     */
    public function setIdClient(\VieilleSardine\UserBundle\Entity\Client $idClient = null)
    {
        $this->idClient = $idClient;
    
        return $this;
    }

    /**
     * Get idClient
     *
     * @return \VieilleSardine\UserBundle\Entity\Client 
     */
    public function getIdClient()
    {
        return $this->idClient;
    }
}