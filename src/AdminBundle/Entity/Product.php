<?php

namespace AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Product
 */
class Product
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     * @Assert\NotBlank(message="产品名称不能为空", groups={"add"})
     * @Assert\Length(
     *     min=2, 
     *     max=20, 
     *     minMessage="产品名称不能小于2个字",
     *     maxMessage="产品名称不能超过20个字",
     *     groups={"editor", "add"}
     * )
     */
    private $name;

    /**
     * @var integer
     * @Assert\NotBlank(message="价格不能为空", groups={"add"})
     * @Assert\Type(
     *      type="int",
     *      message="价格类型不正确",
     *      groups={"add"}
     * )
     */
    private $price;


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
     * Set nae
     *
     * @param string $name
     * @return Product
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
     * Set price
     *
     * @param integer $price
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return integer 
     */
    public function getPrice()
    {
        return $this->price;
    }
}
