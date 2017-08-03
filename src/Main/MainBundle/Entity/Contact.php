<?php

namespace Main\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contact
 *
 * @ORM\Table(name="contact")
 * @ORM\Entity(repositoryClass="Main\MainBundle\Repository\ContactRepository")
 */
class Contact
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
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string", length=255)
     */
    private $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=255)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="text")
     */
    private $message;


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
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Contact
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Contact
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phone
     *
     * @param string $phone
     *
     * @return Contact
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return Contact
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Contact
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set siteWeb
     *
     * @param boolean $siteWeb
     *
     * @return Contact
     */
    public function setSiteWeb($siteWeb)
    {
        $this->site_Web = $siteWeb;

        return $this;
    }

    /**
     * Get siteWeb
     *
     * @return boolean
     */
    public function getSiteWeb()
    {
        return $this->site_Web;
    }

    /**
     * Set social
     *
     * @param boolean $social
     *
     * @return Contact
     */
    public function setSocial($social)
    {
        $this->social = $social;

        return $this;
    }

    /**
     * Get social
     *
     * @return boolean
     */
    public function getSocial()
    {
        return $this->social;
    }

    /**
     * Set audiovisuel
     *
     * @param boolean $audiovisuel
     *
     * @return Contact
     */
    public function setAudiovisuel($audiovisuel)
    {
        $this->audiovisuel = $audiovisuel;

        return $this;
    }

    /**
     * Get audiovisuel
     *
     * @return boolean
     */
    public function getAudiovisuel()
    {
        return $this->audiovisuel;
    }

    /**
     * Set charteGraphique
     *
     * @param boolean $charteGraphique
     *
     * @return Contact
     */
    public function setCharteGraphique($charteGraphique)
    {
        $this->charte_graphique = $charteGraphique;

        return $this;
    }

    /**
     * Get charteGraphique
     *
     * @return boolean
     */
    public function getCharteGraphique()
    {
        return $this->charte_graphique;
    }
}
