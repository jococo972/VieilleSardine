<?php

namespace Test\Bundle\HelloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table(name="produit")
 * @ORM\Entity
 */
class Produit
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="product_name", type="string", length=30, nullable=false)
     */
    private $productName;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantities", type="integer", nullable=false)
     */
    private $quantities;



    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set productName
     *
     * @param string $productName
     * @return Produit
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;
    
        return $this;
    }

    /**
     * Get productName
     *
     * @return string 
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * Set quantities
     *
     * @param integer $quantities
     * @return Produit
     */
    public function setQuantities($quantities)
    {
        $this->quantities = $quantities;
    
        return $this;
    }

    /**
     * Get quantities
     *
     * @return integer 
     */
    public function getQuantities()
    {
        return $this->quantities;
    }
}