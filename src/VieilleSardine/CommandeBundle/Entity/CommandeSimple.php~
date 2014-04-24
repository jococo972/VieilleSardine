<?php

namespace VieilleSardine\CommandeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommandeSimple
 *
 * @ORM\Table(name="commande_simple")
 * @ORM\Entity(repositoryClass="VieilleSardine\CommandeBundle\Entity\CommandeSimpleRepository")
 */
class CommandeSimple
{
    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="CommandeGroupee", mappedBy="idCmdSimple")
     */
    private $idCmdGroupee;

    /**
     * @var \Commande
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Commande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cmd_simple", referencedColumnName="id_commande")
     * })
     */
    private $idCmdSimple;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idCmdGroupee = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    /**
     * Add idCmdGroupee
     *
     * @param \VieilleSardine\CommandeBundle\Entity\CommandeGroupee $idCmdGroupee
     * @return CommandeSimple
     */
    public function addIdCmdGroupee(\VieilleSardine\CommandeBundle\Entity\CommandeGroupee $idCmdGroupee)
    {
        $this->idCmdGroupee[] = $idCmdGroupee;
    
        return $this;
    }

    /**
     * Remove idCmdGroupee
     *
     * @param \VieilleSardine\CommandeBundle\Entity\CommandeGroupee $idCmdGroupee
     */
    public function removeIdCmdGroupee(\VieilleSardine\CommandeBundle\Entity\CommandeGroupee $idCmdGroupee)
    {
        $this->idCmdGroupee->removeElement($idCmdGroupee);
    }

    /**
     * Get idCmdGroupee
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdCmdGroupee()
    {
        return $this->idCmdGroupee;
    }

    /**
     * Set idCmdSimple
     *
     * @param \VieilleSardine\CommandeBundle\Entity\Commande $idCmdSimple
     * @return CommandeSimple
     */
    public function setIdCmdSimple(\VieilleSardine\CommandeBundle\Entity\Commande $idCmdSimple)
    {
        $this->idCmdSimple = $idCmdSimple;
    
        return $this;
    }

    /**
     * Get idCmdSimple
     *
     * @return \VieilleSardine\CommandeBundle\Entity\Commande 
     */
    public function getIdCmdSimple()
    {
        return $this->idCmdSimple;
    }
}