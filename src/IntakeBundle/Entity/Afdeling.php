<?php

namespace IntakeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Afdeling
 *
 * @ORM\Table(name="afdeling")
 * @ORM\Entity(repositoryClass="IntakeBundle\Repository\AfdelingRepository")
 */
class Afdeling
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
     * @ORM\Column(name="naam", type="string", length=30)
     */
    private $naam;

    /**
     * @var string
     *
     * @ORM\Column(name="opleiding", type="string", length=40)
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
     * Set naam
     *
     * @param string $naam
     *
     * @return Afdeling
     */
    public function setNaam($naam)
    {
        $this->naam = $naam;

        return $this;
    }

    /**
     * Get naam
     *
     * @return string
     */
    public function getNaam()
    {
        return $this->naam;
    }

    /**
     * Set opleiding
     *
     * @param string $opleiding
     *
     * @return Afdeling
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
        return $this->getNaam();
    }
}

