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
     * @var string
     *
     * @ORM\Column(name="law_category", type="string", length=255)
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
}