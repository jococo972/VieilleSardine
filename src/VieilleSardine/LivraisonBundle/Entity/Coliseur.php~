<?php

namespace VieilleSardine\LivraisonBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Coliseur
 *
 * @ORM\Table(name="coliseur")
 * @ORM\Entity(repositoryClass="VieilleSardine\LivraisonBundle\Entity\ColiseurRepository")
 */
class Coliseur
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_coliseur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idColiseur;

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
     * Get idColiseur
     *
     * @return integer 
     */
    public function getIdColiseur()
    {
        return $this->idColiseur;
    }

    /**
     * Set login
     *
     * @param string $login
     * @return Coliseur
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
     * @return Coliseur
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
}