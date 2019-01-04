<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Opleiding
 *
 * @ORM\Table(name="opleiding")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OpleidingRepository")
 */
class Opleiding
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
     * @ORM\Column(name="opleiding", type="string")
     */
    private $opleiding;


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
     * Set opleiding
     *
     * @param string $opleiding
     *
     * @return Opleiding
     */
    public function setOpleiding($opleiding)
    {
        $this->opleiding = $opleiding;

        return $this;
    }

    /**
     * Get opleiding
     *
     * @return string
     */
    public function getOpleiding()
    {
        return $this->opleiding;
    }

    public function __toString()
    {
        return $this->opleiding;
    }
}
