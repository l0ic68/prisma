<?php

namespace Main\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Devis
 *
 * @ORM\Table(name="devis")
 * @ORM\Entity(repositoryClass="Main\MainBundle\Repository\DevisRepository")
 */
class Devis
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
     * @ORM\Column(name="contenu_devis", type="string", length=255)
     */
    private $contenuDevis;


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
     * Set contenuDevis
     *
     * @param string $contenuDevis
     * @return Devis
     */
    public function setContenuDevis($contenuDevis)
    {
        $this->contenuDevis = $contenuDevis;

        return $this;
    }

    /**
     * Get contenuDevis
     *
     * @return string 
     */
    public function getContenuDevis()
    {
        return $this->contenuDevis;
    }
}
