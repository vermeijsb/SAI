<?php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="UserRepository")
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
     * @var string
     *
     * @ORM\Column(name="voor_naam", type="string", length=20, nullable=true)
     */
    private $voorNaam;

    /**
     * @var string
     *
     * @ORM\Column(name="achter_naam", type="string", length=20, nullable=true)
     */
    private $achterNaam;

    /**
     * @var string
     *
     * @ORM\Column(name="woonplaats", type="string", length=30, nullable=true)
     */
    private $woonplaats;

    /**
     * @var string
     *
     * @ORM\Column(name="postcode", type="string", length=6, nullable=true)
     */
    private $postcode;

    /**
     * @var int
     *
     * @ORM\Column(name="huisnummer", type="integer", nullable=true)
     */
    private $husnummer;

    /**
     * @var date
     *
     * @ORM\Column(name="geboortedatum", type="date", nullable=true)
     */
    private $geboortedatum;


    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Set voorNaam
     *
     * @param string $voorNaam
     *
     * @return User
     */
    public function setVoorNaam($voorNaam)
    {
        $this->voorNaam = $voorNaam;

        return $this;
    }

    /**
     * Get voorNaam
     *
     * @return string
     */
    public function getVoorNaam()
    {
        return $this->voorNaam;
    }

    /**
     * Set achterNaam
     *
     * @param string $achterNaam
     *
     * @return User
     */
    public function setAchterNaam($achterNaam)
    {
        $this->achterNaam = $achterNaam;

        return $this;
    }

    /**
     * Get achterNaam
     *
     * @return string
     */
    public function getAchterNaam()
    {
        return $this->achterNaam;
    }

    /**
     * Set woonplaats
     *
     * @param string $woonplaats
     *
     * @return User
     */
    public function setWoonplaats($woonplaats)
    {
        $this->woonplaats = $woonplaats;

        return $this;
    }

    /**
     * Get woonplaats
     *
     * @return string
     */
    public function getWoonplaats()
    {
        return $this->woonplaats;
    }

    /**
     * Set postcode
     *
     * @param string $postcode
     *
     * @return User
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;

        return $this;
    }

    /**
     * Get postcode
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Set husnummer
     *
     * @param integer $husnummer
     *
     * @return User
     */
    public function setHusnummer($husnummer)
    {
        $this->husnummer = $husnummer;

        return $this;
    }

    /**
     * Get husnummer
     *
     * @return integer
     */
    public function getHusnummer()
    {
        return $this->husnummer;
    }

    /**
     * Set geboortedatum
     *
     * @param \DateTime $geboortedatum
     *
     * @return User
     */
    public function setGeboortedatum($geboortedatum)
    {
        $this->geboortedatum = $geboortedatum;

        return $this;
    }

    /**
     * Get geboortedatum
     *
     * @return \DateTime
     */
    public function getGeboortedatum()
    {
        return $this->geboortedatum;
    }
}
