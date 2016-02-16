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

    /**
     * Set fname
     *
     * @param string $fname
     *
     * @return User
     */
    public function setFname($fname)
    {
        $this->fname = $fname;

        return $this;
    }

    /**
     * Get fname
     *
     * @return string
     */
    public function getFname()
    {
        return $this->fname;
    }

    /**
     * Set sname
     *
     * @param string $sname
     *
     * @return User
     */
    public function setSname($sname)
    {
        $this->sname = $sname;

        return $this;
    }

    /**
     * Get sname
     *
     * @return string
     */
    public function getSname()
    {
        return $this->sname;
    }

    /**
     * Set academicDegree
     *
     * @param string $academicDegree
     *
     * @return User
     */
    public function setAcademicDegree($academicDegree)
    {
        $this->academicDegree = $academicDegree;

        return $this;
    }

    /**
     * Get academicDegree
     *
     * @return string
     */
    public function getAcademicDegree()
    {
        return $this->academicDegree;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return User
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set office
     *
     * @param string $office
     *
     * @return User
     */
    public function setOffice($office)
    {
        $this->office = $office;

        return $this;
    }

    /**
     * Get office
     *
     * @return string
     */
    public function getOffice()
    {
        return $this->office;
    }

    /**
     * Set city
     *
     * @param string $city
     *
     * @return User
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set zipcode
     *
     * @param string $zipcode
     *
     * @return User
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;

        return $this;
    }

    /**
     * Get zipcode
     *
     * @return string
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set workers
     *
     * @param integer $workers
     *
     * @return User
     */
    public function setWorkers($workers)
    {
        $this->workers = $workers;

        return $this;
    }

    /**
     * Get workers
     *
     * @return integer
     */
    public function getWorkers()
    {
        return $this->workers;
    }

    /**
     * Set www
     *
     * @param string $www
     *
     * @return User
     */
    public function setWww($www)
    {
        $this->www = $www;

        return $this;
    }

    /**
     * Get www
     *
     * @return string
     */
    public function getWww()
    {
        return $this->www;
    }

    /**
     * Set createdDate
     *
     * @param \DateTime $createdDate
     *
     * @return User
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * Get createdDate
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * Set externalId
     *
     * @param string $externalId
     *
     * @return User
     */
    public function setExternalId($externalId)
    {
        $this->externalId = $externalId;

        return $this;
    }

    /**
     * Get externalId
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     *
     * @return User
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     *
     * @return User
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }
}
