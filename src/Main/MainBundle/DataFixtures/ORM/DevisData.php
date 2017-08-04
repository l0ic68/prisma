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
use Main\MainBundle\Entity\Devis;


class DevisData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {


    }

    public function getOrder()
    {
        return 4;
    }
}