<?php

namespace Main\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * APropos
 *
 * @ORM\Table(name="a_propos")
 * @ORM\Entity(repositoryClass="Main\MainBundle\Repository\AProposRepository")
 */
class APropos
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
     * @ORM\Column(name="titre_propos", type="string", length=255)
     */
    private $titrePropos;

    /**
     * @var string
     *
     * @ORM\Column(name="text_propos", type="text")
     */
    private $textPropos;

    /**
     * @var string
     *
     * @ORM\Column(name="titre_vision", type="string", length=255)
     */
    private $titreVision;

    /**
     * @var string
     *
     * @ORM\Column(name="text_vision", type="text")
     */
    private $textVision;


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
     * Set titrePropos
     *
     * @param string $titrePropos
     * @return APropos
     */
    public function setTitrePropos($titrePropos)
    {
        $this->titrePropos = $titrePropos;

        return $this;
    }

    /**
     * Get titrePropos
     *
     * @return string 
     */
    public function getTitrePropos()
    {
        return $this->titrePropos;
    }

    /**
     * Set textPropos
     *
     * @param string $textPropos
     * @return APropos
     */
    public function setTextPropos($textPropos)
    {
        $this->textPropos = $textPropos;

        return $this;
    }

    /**
     * Get textPropos
     *
     * @return string 
     */
    public function getTextPropos()
    {
        return $this->textPropos;
    }

    /**
     * Set titreVision
     *
     * @param string $titreVision
     * @return APropos
     */
    public function setTitreVision($titreVision)
    {
        $this->titreVision = $titreVision;

        return $this;
    }

    /**
     * Get titreVision
     *
     * @return string 
     */
    public function getTitreVision()
    {
        return $this->titreVision;
    }

    /**
     * Set textVision
     *
     * @param string $textVision
     * @return APropos
     */
    public function setTextVision($textVision)
    {
        $this->textVision = $textVision;

        return $this;
    }

    /**
     * Get textVision
     *
     * @return string 
     */
    public function getTextVision()
    {
        return $this->textVision;
    }
}
