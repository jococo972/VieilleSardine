<?php

namespace VieilleSardine\RetourBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RetourOperation
 *
 * @ORM\Table(name="retour_operation")
 * @ORM\Entity(repositoryClass="VieilleSardine\RetourBundle\Entity\RetourOperationRepository")
 */
class RetourOperation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_operation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOperation;

    /**
     * @var integer
     *
     * @ORM\Column(name="action", type="integer", nullable=false)
     */
    private $action;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_personne", type="integer", nullable=false)
     */
    private $idPersonne;

    /**
     * @var string
     *
     * @ORM\Column(name="type_personne", type="string", nullable=false)
     */
    private $typePersonne;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="text", nullable=false)
     */
    private $commentaire;

    /**
     * @var \Retour
     *
     * @ORM\ManyToOne(targetEntity="Retour")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_retour", referencedColumnName="id_retour")
     * })
     */
    private $idRetour;



    /**
     * Get idOperation
     *
     * @return integer 
     */
    public function getIdOperation()
    {
        return $this->idOperation;
    }

    /**
     * Set action
     *
     * @param integer $action
     * @return RetourOperation
     */
    public function setAction($action)
    {
        $this->action = $action;
    
        return $this;
    }

    /**
     * Get action
     *
     * @return integer 
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return RetourOperation
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set idPersonne
     *
     * @param integer $idPersonne
     * @return RetourOperation
     */
    public function setIdPersonne($idPersonne)
    {
        $this->idPersonne = $idPersonne;
    
        return $this;
    }

    /**
     * Get idPersonne
     *
     * @return integer 
     */
    public function getIdPersonne()
    {
        return $this->idPersonne;
    }

    /**
     * Set typePersonne
     *
     * @param string $typePersonne
     * @return RetourOperation
     */
    public function setTypePersonne($typePersonne)
    {
        $this->typePersonne = $typePersonne;
    
        return $this;
    }

    /**
     * Get typePersonne
     *
     * @return string 
     */
    public function getTypePersonne()
    {
        return $this->typePersonne;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return RetourOperation
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;
    
        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set idRetour
     *
     * @param \VieilleSardine\RetourBundle\Entity\Retour $idRetour
     * @return RetourOperation
     */
    public function setIdRetour(\VieilleSardine\RetourBundle\Entity\Retour $idRetour = null)
    {
        $this->idRetour = $idRetour;
    
        return $this;
    }

    /**
     * Get idRetour
     *
     * @return \VieilleSardine\RetourBundle\Entity\Retour 
     */
    public function getIdRetour()
    {
        return $this->idRetour;
    }
}