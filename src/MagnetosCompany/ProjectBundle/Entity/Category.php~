<?php

namespace MagnetosCompany\ProjectBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="MagnetosCompany\ProjectBundle\Repository\CategoryRepository")
 */
class Category
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="subcategory", type="string", length=255)
     */
    private $subcategory;

    /**
     * @var int
     *
     * @ORM\Column(name="count_products", type="integer")
     */
    private $countProducts;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set subcategory
     *
     * @param string $subcategory
     *
     * @return Category
     */
    public function setSubcategory($subcategory)
    {
        $this->subcategory = $subcategory;

        return $this;
    }

    /**
     * Get subcategory
     *
     * @return string
     */
    public function getSubcategory()
    {
        return $this->subcategory;
    }

    /**
     * Set countProducts
     *
     * @param integer $countProducts
     *
     * @return Category
     */
    public function setCountProducts($countProducts)
    {
        $this->countProducts = $countProducts;

        return $this;
    }

    /**
     * Get countProducts
     *
     * @return int
     */
    public function getCountProducts()
    {
        return $this->countProducts;
    }
}
