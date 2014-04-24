<?php

namespace VieilleSardine\LivraisonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Preparateur
 *
 * @ORM\Table(name="preparateur")
 * @ORM\Entity(repositoryClass="VieilleSardine\LivraisonBundle\Entity\PreparateurRepository")
 */
class Preparateur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_preparateur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPreparateur;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=30, nullable=false)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=30, nullable=false)
     */
    private $password;

    /**
     * @var \Couloir
     *
     * @ORM\ManyToOne(targetEntity="VieilleSardine\StockBundle\Entity\Couloir")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_couloir", referencedColumnName="id_couloir")
     * })
     */
    private $idCouloir;



    /**
     * Get idPreparateur
     *
     * @return integer 
     */
    public function getIdPreparateur()
    {
        return $this->idPreparateur;
    }

    /**
     * Set login
     *
     * @param string $login
     * @return Preparateur
     */
    public function setLogin($login)
    {
        $this->login = $login;
    
        return $this;
    }

    /**
     * Get login
     *
     * @return string 
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Preparateur
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set idCouloir
     *
     * @param \VieilleSardine\StockBundle\Entity\Couloir $idCouloir
     * @return Preparateur
     */
    public function setIdCouloir(\VieilleSardine\StockBundle\Entity\Couloir $idCouloir = null)
    {
        $this->idCouloir = $idCouloir;
    
        return $this;
    }

    /**
     * Get idCouloir
     *
     * @return \VieilleSardine\StockBundle\Entity\Couloir 
     */
    public function getIdCouloir()
    {
        return $this->idCouloir;
    }
}