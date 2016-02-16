<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Lead
 *
 * @ORM\Table(name="lead")
 * @ORM\Entity
 */
class Lead
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
     * @ORM\Column(name="name", type="string", length=100)
     */
    protected $name;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255)
     */
    protected $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    protected $email;

    /**
     * @var string
     *
     * @ORM\Column(name="zipcode", type="string", length=255)
     */
    protected $zipcode;

    /**
     * @var integer
     *
     * @ORM\Column(name="law_category", type="integer")
     */
    protected $lawCategory;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="float")
     */
    protected $longitude;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="float")
     */
    protected $latitude;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="register_date", type="datetimetz")
     */
    protected $registerDate;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cc_validation", type="boolean")
     */
    protected $ccValidation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cc_validation_date", type="datetime")
     */
    protected $ccValidationDate;

    /**
     * @var string
     *
     * @ORM\Column(name="cc_notes", type="text")
     */
    protected $ccNotes;

    /**
     * @var boolean
     *
     * @ORM\Column(name="autosell", type="boolean")
     */
    protected $autosell;

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
     * @return Lead
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
     * Set phone
     *
     * @param string $phone
     *
     * @return Lead
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
     * Set email
     *
     * @param string $email
     *
     * @return Lead
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set zipcode
     *
     * @param string $zipcode
     *
     * @return Lead
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
     * Set lawCategory
     *
     * @param integer $lawCategory
     *
     * @return Lead
     */
    public function setLawCategory($lawCategory)
    {
        $this->lawCategory = $lawCategory;

        return $this;
    }

    /**
     * Get lawCategory
     *
     * @return integer
     */
    public function getLawCategory()
    {
        return $this->lawCategory;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     *
     * @return Lead
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

    /**
     * Set latitude
     *
     * @param float $latitude
     *
     * @return Lead
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
     * Set registerDate
     *
     * @param \DateTime $registerDate
     *
     * @return Lead
     */
    public function setRegisterDate($registerDate)
    {
        $this->registerDate = $registerDate;

        return $this;
    }

    /**
     * Get registerDate
     *
     * @return \DateTime
     */
    public function getRegisterDate()
    {
        return $this->registerDate;
    }

    /**
     * Set ccValidation
     *
     * @param boolean $ccValidation
     *
     * @return Lead
     */
    public function setCcValidation($ccValidation)
    {
        $this->ccValidation = $ccValidation;

        return $this;
    }

    /**
     * Get ccValidation
     *
     * @return boolean
     */
    public function getCcValidation()
    {
        return $this->ccValidation;
    }

    /**
     * Set ccValidationDate
     *
     * @param \DateTime $ccValidationDate
     *
     * @return Lead
     */
    public function setCcValidationDate($ccValidationDate)
    {
        $this->ccValidationDate = $ccValidationDate;

        return $this;
    }

    /**
     * Get ccValidationDate
     *
     * @return \DateTime
     */
    public function getCcValidationDate()
    {
        return $this->ccValidationDate;
    }

    /**
     * Set ccNotes
     *
     * @param string $ccNotes
     *
     * @return Lead
     */
    public function setCcNotes($ccNotes)
    {
        $this->ccNotes = $ccNotes;

        return $this;
    }

    /**
     * Get ccNotes
     *
     * @return string
     */
    public function getCcNotes()
    {
        return $this->ccNotes;
    }

    /**
     * Set autosell
     *
     * @param boolean $autosell
     *
     * @return Lead
     */
    public function setAutosell($autosell)
    {
        $this->autosell = $autosell;

        return $this;
    }

    /**
     * Get autosell
     *
     * @return boolean
     */
    public function getAutosell()
    {
        return $this->autosell;
    }
}
