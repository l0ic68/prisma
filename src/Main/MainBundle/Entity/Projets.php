<?php

namespace Main\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projets
 *
 * @ORM\Table(name="projets")
 * @ORM\Entity(repositoryClass="Main\MainBundle\Repository\ProjetsRepository")
 */
class Projets
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
     * @ORM\Column(name="project_banner", type="string", length=255)
     */
    private $projectBanner;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="technologies", type="string", length=255)
     */
    private $technologies;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_sortie", type="datetime")
     */
    private $dateSortie;

    /**
     * @var string
     *
     * @ORM\Column(name="presentation", type="text")
     */
    private $presentation;

    /**
     * @var string
     *
     * @ORM\Column(name="images", type="string", length=255)
     */
    private $images;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;


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
     * Set projectBanner
     *
     * @param string $projectBanner
     * @return Projets
     */
    public function setProjectBanner($projectBanner)
    {
        $this->projectBanner = $projectBanner;

        return $this;
    }

    /**
     * Get projectBanner
     *
     * @return string 
     */
    public function getProjectBanner()
    {
        return $this->projectBanner;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return Projets
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
     * Set type
     *
     * @param string $type
     * @return Projets
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set technologies
     *
     * @param string $technologies
     * @return Projets
     */
    public function setTechnologies($technologies)
    {
        $this->technologies = $technologies;

        return $this;
    }

    /**
     * Get technologies
     *
     * @return string 
     */
    public function getTechnologies()
    {
        return $this->technologies;
    }

    /**
     * Set dateSortie
     *
     * @param \DateTime $dateSortie
     * @return Projets
     */
    public function setDateSortie($dateSortie)
    {
        $this->dateSortie = $dateSortie;

        return $this;
    }

    /**
     * Get dateSortie
     *
     * @return \DateTime 
     */
    public function getDateSortie()
    {
        return $this->dateSortie;
    }

    /**
     * Set presentation
     *
     * @param string $presentation
     * @return Projets
     */
    public function setPresentation($presentation)
    {
        $this->presentation = $presentation;

        return $this;
    }

    /**
     * Get presentation
     *
     * @return string 
     */
    public function getPresentation()
    {
        return $this->presentation;
    }

    /**
     * Set images
     *
     * @param string $images
     * @return Projets
     */
    public function setImages($images)
    {
        $this->images = $images;

        return $this;
    }

    /**
     * Get images
     *
     * @return string 
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Projets
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }
}
