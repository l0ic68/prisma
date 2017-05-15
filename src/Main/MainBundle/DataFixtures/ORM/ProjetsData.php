<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 08/02/2017
 * Time: 11:48
 */

namespace Main\MainBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Main\MainBundle\Entity\Projets;


class ProjetsData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $projet1 = new Projets();
        $projet1->setProjectBanner("Je sais pas trop");
        $projet1->setNom("Prisma");
        $projet1->setType("C'est quoi le type ?");
        $projet1->setTechnologies("Pourquoi un Float");
        $projet1->setPresentation("Un projet lambda");
        $projet1->setDateSortie(new \DateTime());
        $projet1->setImages("Une photo");
        $projet1->setUrl("URL de quoi ?");
        $manager->persist($projet1);

        $manager->flush();

        $this->addReference('projet1',$projet1);

    }

    public function getOrder()
    {
        return 3;
    }
}