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
use Main\MainBundle\Entity\Media;



class MediaData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $email = new Media();
        $email->setPath('img/email.png');
        $email->setUrl('email.png');
        $manager->persist($email);

        $facebook = new Media();
        $facebook->setPath('img/facebook.png');
        $facebook->setUrl('facebook.png');
        $manager->persist($facebook);

        $google = new Media();
        $google->setPath('img/google.png');
        $google->setUrl('google.png');
        $manager->persist($google);

        $twitter = new Media();
        $twitter->setPath('img/twitter.png');
        $twitter->setUrl('twitter.png');
        $manager->persist($twitter);

        $carouselMedia1 = new Media();
        $carouselMedia1->setPath('img/1.jpg');
        $carouselMedia1->setUrl('1.jpg');
        $manager->persist($carouselMedia1);

        $carouselMedia2 = new Media();
        $carouselMedia2->setPath('img/2.jpg');
        $carouselMedia2->setUrl('2.jpg');
        $manager->persist($carouselMedia2);

        $carouselMedia3 = new Media();
        $carouselMedia3->setPath('img/3.jpg');
        $carouselMedia3->setUrl('3.jpg');
        $manager->persist($carouselMedia3);

        $carouselMedia4 = new Media();
        $carouselMedia4->setPath('img/4.jpg');
        $carouselMedia4->setUrl('4.jpg');
        $manager->persist($carouselMedia4);

        $carouselMedia5 = new Media();
        $carouselMedia5->setPath('img/5.jpg');
        $carouselMedia5->setUrl('5.jpg');
        $manager->persist($carouselMedia5);

        $equipe_groupe = new Media();
        $equipe_groupe->setPath('img/ImageGroupe.JPG');
        $equipe_groupe->setUrl('ImageGroupe.JPG');
        $manager->persist($equipe_groupe);

        $inconnu = new Media();
        $inconnu->setPath('img/Inconnue.jpg');
        $inconnu->setUrl('Inconnue.jpg');
        $manager->persist($inconnu);

        $irakG = new Media();
        $irakG->setPath('img/irak.png');
        $irakG->setUrl('irak.png');
        $manager->persist($irakG);

        $kirkouk = new Media();
        $kirkouk->setPath('img/kirkouk.png');
        $kirkouk->setUrl('kirkouk.png');
        $manager->persist($kirkouk);

        $symfony = new Media();
        $symfony->setPath('img/symfony.png');
        $symfony->setUrl('Symfony');
        $manager->persist($symfony);

        $ajax = new Media();
        $ajax->setPath('img/ajax.jpg');
        $ajax->setUrl('ajax');
        $manager->persist($ajax);

        $html = new Media();
        $html->setPath('img/html.jpg');
        $html->setUrl('html');
        $manager->persist($html);

        $manager->flush();

        $this->addReference('email',$email);
        $this->addReference('facebook',$facebook);
        $this->addReference('google',$google);
        $this->addReference('carouselMedia1',$carouselMedia1);
        $this->addReference('carouselMedia2',$carouselMedia2);
        $this->addReference('carouselMedia3',$carouselMedia3);
        $this->addReference('carouselMedia4',$carouselMedia4);
        $this->addReference('carouselMedia5',$carouselMedia5);
        $this->addReference('equipe_groupe',$equipe_groupe);
        $this->addReference('inconnu',$inconnu);
        $this->addReference('irakG_media',$irakG);
        $this->addReference('kirkouk',$kirkouk);
        $this->addReference('symfony',$symfony);
        $this->addReference('ajax',$ajax);
        $this->addReference('html',$html);
    }

    public function getOrder()
    {
        return 1;
    }
}