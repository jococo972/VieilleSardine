<?php

namespace VieilleSardine\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * CompteClient
 *
 * @ORM\Table(name="compte_client")
 * @ORM\Entity(repositoryClass="VieilleSardine\UserBundle\Entity\CompteClientRepository")
 */
class CompteClient extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_compte_client", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_create", type="datetime", nullable=false)
     */
    private $dateCreate;

    public function __construct() {
        parent::__construct();
        $this->dateCreate = new \DateTime();
    }

    /**
     * Set dateCreate
     *
     * @param \DateTime $dateCreate
     * @return CompteClient
     */
    public function setDateCreate($dateCreate)
    {
        $this->dateCreate = $dateCreate;

        return $this;
    }

    /**
     * Get dateCreate
     *
     * @return \DateTime 
     */
    public function getDateCreate()
    {
        return $this->dateCreate;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
}
}