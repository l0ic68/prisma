<?php

namespace Main\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="Main\MainBundle\Repository\ClientRepository")
 */
class Client
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
     * @ORM\Column(name="entreprise", type="string", length=255)
     */
    private $entreprise;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="url_site", type="string", length=255)
     */
    private $urlSite;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="temoignage", type="text")
     */
    private $temoignage;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255)
     */
    private $telephone;

    /**
     * @var bool
     *
     * @ORM\Column(name="sav", type="boolean")
     */
    private $sav;

    /**
     * @var bool
     *
     * @ORM\Column(name="newsletter", type="boolean")
     */
    private $newsletter;


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
     * Set entreprise
     *
     * @param string $entreprise
     * @return Client
     */
    public function setEntreprise($entreprise)
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    /**
     * Get entreprise
     *
     * @return string 
     */
    public function getEntreprise()
    {
        return $this->entreprise;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Client
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set urlSite
     *
     * @param string $urlSite
     * @return Client
     */
    public function setUrlSite($urlSite)
    {
        $this->urlSite = $urlSite;

        return $this;
    }

    /**
     * Get urlSite
     *
     * @return string 
     */
    public function getUrlSite()
    {
        return $this->urlSite;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Client
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set temoignage
     *
     * @param string $temoignage
     * @return Client
     */
    public function setTemoignage($temoignage)
    {
        $this->temoignage = $temoignage;

        return $this;
    }

    /**
     * Get temoignage
     *
     * @return string 
     */
    public function getTemoignage()
    {
        return $this->temoignage;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return Client
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set sav
     *
     * @param boolean $sav
     * @return Client
     */
    public function setSav($sav)
    {
        $this->sav = $sav;

        return $this;
    }

    /**
     * Get sav
     *
     * @return boolean 
     */
    public function getSav()
    {
        return $this->sav;
    }

    /**
     * Set newsletter
     *
     * @param boolean $newsletter
     * @return Client
     */
    public function setNewsletter($newsletter)
    {
        $this->newsletter = $newsletter;

        return $this;
    }

    /**
     * Get newsletter
     *
     * @return boolean 
     */
    public function getNewsletter()
    {
        return $this->newsletter;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Client
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }
}
