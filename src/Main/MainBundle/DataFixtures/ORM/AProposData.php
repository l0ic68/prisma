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
use Main\MainBundle\Entity\APropos;


class AProposData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $apropos1 = new APropos();
        $apropos1->setTitreVision("Titre de la vision");
        $apropos1->setTextVision("Text de la vision");
        $apropos1->setTitrePropos("Titre de la propos");
        $apropos1->setTextPropos("Texte de la propos");
        $manager->persist($apropos1);

        $apropos2 = new APropos();
        $apropos2->setTitreVision("Titre de la vision 2");
        $apropos2->setTextVision("Text de la vision 2");
        $apropos2->setTitrePropos("Titre de la propos 2");
        $apropos2->setTextPropos("Texte de la propos 2");
        $manager->persist($apropos2);


        $manager->flush();

        $this->addReference('apropos1',$apropos1);
        $this->addReference('apropos2',$apropos2);
    }

    public function getOrder()
    {
        return 1;
    }
}