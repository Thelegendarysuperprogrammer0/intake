<?php

namespace IntakeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Locatie
 *
 * @ORM\Table(name="locatie")
 * @ORM\Entity(repositoryClass="IntakeBundle\Repository\LocatieRepository")
 */
class Locatie
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
     * @ORM\Column(name="plaats", type="string", length=30)
     */
    private $plaats;

    /**
     * @var string
     *
     * @ORM\Column(name="adres", type="string", length=30)
     */
    private $adres;

    /**
     * @var string
     *
     * @ORM\Column(name="postcode", type="string", length=7)
     */
    private $postcode;


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
     * Set plaats
     *
     * @param string $plaats
     *
     * @return Locatie
     */
    public function setPlaats($plaats)
    {
        $this->plaats = $plaats;

        return $this;
    }

    /**
     * Get plaats
     *
     * @return string
     */
    public function getPlaats()
    {
        return $this->plaats;
    }

    /**
     * Set adres
     *
     * @param string $adres
     *
     * @return Locatie
     */
    public function setAdres($adres)
    {
        $this->adres = $adres;

        return $this;
    }

    /**
     * Get adres
     *
     * @return string
     */
    public function getAdres()
    {
        return $this->adres;
    }

    /**
     * Set postcode
     *
     * @param string $postcode
     *
     * @return Locatie
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
    public function __toString()
    {
        return $this->getAdres();
    }
}

