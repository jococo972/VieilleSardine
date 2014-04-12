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
     * @var integer
     *
     * @ORM\Column(name="NumCouloir", type="integer", nullable=false)
     */
    private $numcouloir;



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
     * Set numcouloir
     *
     * @param integer $numcouloir
     * @return Preparateur
     */
    public function setNumcouloir($numcouloir)
    {
        $this->numcouloir = $numcouloir;
    
        return $this;
    }

    /**
     * Get numcouloir
     *
     * @return integer 
     */
    public function getNumcouloir()
    {
        return $this->numcouloir;
    }
}