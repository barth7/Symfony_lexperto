<?php
/**
 * Created by PhpStorm.
 * User: Bart
 * Date: 16.02.2016
 * Time: 13:16
 */
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * LawCategory
 *
 * @ORM\Table(name="law_category")
 * @ORM\Entity
 */
class LawCategory
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="category_name", type="string")
     */
    protected $name;
    /**
     * @var integer
     *
     * @ORM\Column(name="category_price", type="integer")
     */
    protected $price;

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
     * Set name
     *
     * @param string $name
     *
     * @return LawCategory
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
     *
     * @return LawCategory
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
