<?php

namespace VieilleSardine\CommandeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CommandeGroupee
 *
 * @ORM\Table(name="commande_groupee")
 * @ORM\Entity(repositoryClass="VieilleSardine\CommandeBundle\Entity\CommandeGroupeeRepository")
 */
class CommandeGroupee
{
    /**
     * @var integer
     *
     * @ORM\Column(name="nb_cmd_simple", type="integer", nullable=false)
     */
    private $nbCmdSimple;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="CommandeSimple", inversedBy="idCmdGroupee")
     * @ORM\JoinTable(name="composition_cmd_groupee",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_cmd_groupee", referencedColumnName="id_cmd_groupee")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_cmd_simple", referencedColumnName="id_cmd_simple")
     *   }
     * )
     */
    private $idCmdSimple;

    /**
     * @var \Commande
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Commande")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_cmd_groupee", referencedColumnName="id_commande")
     * })
     */
    private $idCmdGroupee;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idCmdSimple = new \Doctrine\Common\Collections\ArrayCollection();
    }
    

    /**
     * Set nbCmdSimple
     *
     * @param integer $nbCmdSimple
     * @return CommandeGroupee
     */
    public function setNbCmdSimple($nbCmdSimple)
    {
        $this->nbCmdSimple = $nbCmdSimple;
    
        return $this;
    }

    /**
     * Get nbCmdSimple
     *
     * @return integer 
     */
    public function getNbCmdSimple()
    {
        return $this->nbCmdSimple;
    }

    /**
     * Add idCmdSimple
     *
     * @param \VieilleSardine\CommandeBundle\Entity\CommandeSimple $idCmdSimple
     * @return CommandeGroupee
     */
    public function addIdCmdSimple(\VieilleSardine\CommandeBundle\Entity\CommandeSimple $idCmdSimple)
    {
        $this->idCmdSimple[] = $idCmdSimple;
    
        return $this;
    }

    /**
     * Remove idCmdSimple
     *
     * @param \VieilleSardine\CommandeBundle\Entity\CommandeSimple $idCmdSimple
     */
    public function removeIdCmdSimple(\VieilleSardine\CommandeBundle\Entity\CommandeSimple $idCmdSimple)
    {
        $this->idCmdSimple->removeElement($idCmdSimple);
    }

    /**
     * Get idCmdSimple
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdCmdSimple()
    {
        return $this->idCmdSimple;
    }

    /**
     * Set idCmdGroupee
     *
     * @param \VieilleSardine\CommandeBundle\Entity\Commande $idCmdGroupee
     * @return CommandeGroupee
     */
    public function setIdCmdGroupee(\VieilleSardine\CommandeBundle\Entity\Commande $idCmdGroupee)
    {
        $this->idCmdGroupee = $idCmdGroupee;
    
        return $this;
    }

    /**
     * Get idCmdGroupee
     *
     * @return \VieilleSardine\CommandeBundle\Entity\Commande 
     */
    public function getIdCmdGroupee()
    {
        return $this->idCmdGroupee;
    }
}