<?php

namespace IntakeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Afspraak
 *
 * @ORM\Table(name="afspraak")
 * @ORM\Entity(repositoryClass="IntakeBundle\Repository\AfspraakRepository")
 */
class Afspraak
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
     * @ORM\ManyToOne(targetEntity="IntakeBundle\Entity\User", inversedBy="docentId")
     * @ORM\JoinColumn(name="docentId", referencedColumnName="id")
     */
    private $docentId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="begin", type="datetime")
     */
    private $begin;

    /**
     * @var string
     *
     * @ORM\Column(name="duur", type="string", length=10)
     */
    private $duur;


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
     * Set docentId
     *
     * @param integer $docentId
     *
     * @return Afspraak
     */
    public function setDocentId($docentId)
    {
        $this->docentId = $docentId;

        return $this;
    }

    /**
     * Get docentId
     *
     * @return int
     */
    public function getDocentId()
    {
        return $this->docentId;
    }

    /**
     * Set begin
     *
     * @param \DateTime $begin
     *
     * @return Afspraak
     */
    public function setBegin($begin)
    {
        $this->begin = $begin;

        return $this;
    }

    /**
     * Get begin
     *
     * @return \DateTime
     */
    public function getBegin()
    {
        return $this->begin;
    }

    /**
     * Set duur
     *
     * @param string $duur
     *
     * @return Afspraak
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

    public function __toString()
    {
        return $this->docentId."";
    }
}

