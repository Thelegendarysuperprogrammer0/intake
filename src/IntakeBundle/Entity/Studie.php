<?php

namespace IntakeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Studie
 *
 * @ORM\Table(name="studie")
 * @ORM\Entity(repositoryClass="IntakeBundle\Repository\StudieRepository")
 */
class Studie
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
     * @ORM\ManyToOne(targetEntity="IntakeBundle\Entity\User", inversedBy="userId")
     * @ORM\JoinColumn(name="userId", referencedColumnName="id")
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="naam", type="string", length=40)
     */
    private $naam;

    /**
     * @ORM\ManyToOne(targetEntity="IntakeBundle\Entity\Locatie", inversedBy="locatieId")
     * @ORM\JoinColumn(name="locatieId", referencedColumnName="id")
     */
    private $locatieId;

    /**
     * @ORM\ManyToOne(targetEntity="IntakeBundle\Entity\Afdeling", inversedBy="afdelingId")
     * @ORM\JoinColumn(name="afdelingId", referencedColumnName="id")
     */
    private $afdelingId;

    /**
     * @ORM\ManyToOne(targetEntity="IntakeBundle\Entity\Afspraak", inversedBy="afspraakId")
     * @ORM\JoinColumn(name="afspraakId", referencedColumnName="id")
     */
    private $afspraakId;


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
     * @return Studie
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
     * Set naam
     *
     * @param string $naam
     *
     * @return Studie
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
     * Set locatieId
     *
     * @param integer $locatieId
     *
     * @return Studie
     */
    public function setLocatieId($locatieId)
    {
        $this->locatieId = $locatieId;

        return $this;
    }

    /**
     * Get locatieId
     *
     * @return int
     */
    public function getLocatieId()
    {
        return $this->locatieId;
    }

    /**
     * Set afdelingId
     *
     * @param integer $afdelingId
     *
     * @return Studie
     */
    public function setAfdelingId($afdelingId)
    {
        $this->afdelingId = $afdelingId;

        return $this;
    }

    /**
     * Get afdelingId
     *
     * @return int
     */
    public function getAfdelingId()
    {
        return $this->afdelingId;
    }

    /**
     * Set afspraakId
     *
     * @param integer $afspraakId
     *
     * @return Studie
     */
    public function setAfspraakId($afspraakId)
    {
        $this->afspraakId = $afspraakId;

        return $this;
    }

    /**
     * Get afspraakId
     *
     * @return int
     */
    public function getAfspraakId()
    {
        return $this->afspraakId;
    }
}

