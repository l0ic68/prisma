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
use Main\MainBundle\Entity\Client;


class ClientsData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $client1 = new Client();
        $client1->setEntreprise("Prisma");
        $client1->setNom("Oulerich");
        $client1->setMail("oulerich.loic@gmail.com");
        $client1->setUrlSite("faerith.fr");
        $client1->setTemoignage("C'est super bien");
        $client1->setTelephone("03.89.80.81.59");
        $client1->setSav(true);
        $client1->setNewsletter(false);
        $manager->persist($client1);

        $manager->flush();

        $this->addReference('client1',$client1);

    }

    public function getOrder()
    {
        return 1;
    }
}