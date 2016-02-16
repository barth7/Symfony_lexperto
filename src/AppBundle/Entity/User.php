<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $fname;
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $sname;
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $academicDegree;
    /**
     * @ORM\Column(type="string",nullable=false, unique=true)
     *
     * @Assert\Regex("/([1-9]{3})-([0-9]{3})-([0-9]{3})/", message="Twój numer telefonu nie jest poprawny. Wpisz go w formacie 111-222-333")
     */
    protected $phone;
    /**
     * @ORM\Column(type="string", length=256)
     */
    protected $office;
    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $city;
    /**
     * @ORM\Column(type="string")
     * @Assert\Regex("/([0-9]{2})-([0-9]{3})/", message="Twój kod pocztowy nie jest poprawny. Wpisz go w formacie 11-222")
     *
     * )
     */
    protected $zipcode;
    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    protected $workers;
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    protected $www;
    /**
     * @ORM\Column(type="datetime")
     */
    protected $createdDate;
    /**
     * @ORM\Column(type="string",nullable=true)
     */
    protected $externalId;
    /**
     * @ORM\Column(type="float",nullable=true)
     */
    protected $latitude;
    /**
     * @ORM\Column(type="float",nullable=true)
     */
    protected $longitude;


    public function __construct()
    {
        parent::__construct();
        $this->createdDate = new \DateTime();
    }
}