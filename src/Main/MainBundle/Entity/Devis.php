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
     * @ORM\Column(name="type_site", type="string", length=255)
     */
    private $type;

    /**
     * @ORM\ManyToMany(targetEntity="Main\MainBundle\Entity\Modules", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $modules;

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
     * Set type
     *
     * @param string $type
     *
     * @return Devis
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
     * Add module
     *
     * @param \Main\MainBundle\Entity\Modules $module
     *
     * @return Devis
     */
    public function addModule(\Main\MainBundle\Entity\Modules $module)
    {
        $this->modules[] = $module;

        return $this;
    }

    /**
     * Remove module
     *
     * @param \Main\MainBundle\Entity\Modules $module
     */
    public function removeModule(\Main\MainBundle\Entity\Modules $module)
    {
        $this->modules->removeElement($module);
    }

    /**
     * Get modules
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getModules()
    {
        return $this->modules;
    }
}
