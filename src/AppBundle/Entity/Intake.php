<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Intake
 *
 * @ORM\Table(name="intake")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\IntakeRepository")
 */
class Intake
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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(name="userId", referencedColumnName="id")
     */
    private $userId;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(name="docentId", referencedColumnName="id")
     */
    private $docentId;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Opleiding")
     * @ORM\JoinColumn(name="opleidingId", referencedColumnName="id")
     */
    private $opleidingId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datum", type="date")
     */
    private $datum;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tijd", type="time")
     */
    private $tijd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="duur", type="time")
     */
    private $duur;

    /**
     * @var string
     *
     * @ORM\Column(name="locatie", type="string", length=40)
     */
    private $locatie;


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
     * Set userId
     *
     * @param integer $userId
     *
     * @return Intake
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set opleidingId
     *
     * @param integer $opleidingId
     *
     * @return Intake
     */
    public function setOpleidingId($opleidingId)
    {
        $this->opleidingId = $opleidingId;

        return $this;
    }

    /**
     * Get opleidingId
     *
     * @return int
     */
    public function getOpleidingId()
    {
        return $this->opleidingId;
    }

    /**
     * Set datum
     *
     * @param \DateTime $datum
     *
     * @return Intake
     */
    public function setDatum($datum)
    {
        $this->datum = $datum;

        return $this;
    }

    /**
     * Get datum
     *
     * @return \DateTime
     */
    public function getDatum()
    {
        return $this->datum;
    }

    /**
     * Set tijd
     *
     * @param string $tijd
     *
     * @return Intake
     */
    public function setTijd($tijd)
    {
        $this->tijd = $tijd;

        return $this;
    }

    /**
     * Get tijd
     *
     * @return string
     */
    public function getTijd()
    {
        return $this->tijd;
    }

    /**
     * Set duur
     *
     * @param string $duur
     *
     * @return Intake
     */
    public function setDuur($duur)
    {
        $this->duur = $duur;

        return $this;
    }

    /**
     * Get duur
     *
     * @return string
     */
    public function getDuur()
    {
        return $this->duur;
    }

    /**
     * Set locatie
     *
     * @param string $locatie
     *
     * @return Intake
     */
    public function setLocatie($locatie)
    {
        $this->locatie = $locatie;

        return $this;
    }

    /**
     * Get locatie
     *
     * @return string
     */
    public function getLocatie()
    {
        return $this->locatie;
    }

    /**
     * Set docentId
     *
     * @param \AppBundle\Entity\User $docentId
     *
     * @return Intake
     */
    public function setDocentId(\AppBundle\Entity\User $docentId = null)
    {
        $this->docentId = $docentId;

        return $this;
    }

    /**
     * Get docentId
     *
     * @return \AppBundle\Entity\User
     */
    public function getDocentId()
    {
        return $this->docentId;
    }
}
