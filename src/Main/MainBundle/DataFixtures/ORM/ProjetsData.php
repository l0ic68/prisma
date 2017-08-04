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
        $projet1->setType("Site Web");
        $projet1->setTechnologies("Pourquoi un Float");
        $projet1->setPresentation("Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.");
        $projet1->setDateSortie(new \DateTime());
        $projet1->setPicture($this->getReference('email'));
        $projet1->addMedia($this->getReference('equipe_groupe'));
        $projet1->addMedia($this->getReference('kirkouk'));
        $projet1->addMedia($this->getReference('irakG_media'));
        $projet1->addTechno($this->getReference('symfony'));
        $projet1->addTechno($this->getReference('ajax'));
        $projet1->addTechno($this->getReference('html'));
        $projet1->setUrl("https://www.google.fr/");
        $manager->persist($projet1);

        $projet2 = new Projets();
        $projet2->setProjectBanner("Je sais pas trop");
        $projet2->setNom("Prisma");
        $projet2->setType("Réseaux Sociaux");
        $projet2->setTechnologies("Pourquoi un Float");
        $projet2->setPresentation("Un projet lambda");
        $projet2->setPicture($this->getReference('twitter'));
        $projet2->setDateSortie(new \DateTime());
        $projet2->setImages("Une photo");
        $projet2->setUrl("URL de quoi ?");
        $manager->persist($projet2);

        $projet3 = new Projets();
        $projet3->setProjectBanner("Je sais pas trop");
        $projet3->setNom("Prisma");
        $projet3->setType("Audiovisuel");
        $projet3->setPicture($this->getReference('google'));
        $projet3->setTechnologies("Pourquoi un Float");
        $projet3->setPresentation("Un projet lambda");
        $projet3->setDateSortie(new \DateTime());
        $projet3->setImages("Une photo");
        $projet3->setUrl("URL de quoi ?");
        $manager->persist($projet3);

        $projet4 = new Projets();
        $projet4->setProjectBanner("Je sais pas trop");
        $projet4->setNom("Prisma");
        $projet4->setType("Réseaux Sociaux");
        $projet4->setTechnologies("Pourquoi un Float");
        $projet4->setPresentation("Un projet lambda");
        $projet4->setPicture($this->getReference('carouselMedia1'));
        $projet4->setDateSortie(new \DateTime());
        $projet4->setImages("Une photo");
        $projet4->setUrl("URL de quoi ?");
        $manager->persist($projet4);

        $projet5 = new Projets();
        $projet5->setProjectBanner("Je sais pas trop");
        $projet5->setNom("Prisma");
        $projet5->setType("Réseaux Sociaux");
        $projet5->setTechnologies("Pourquoi un Float");
        $projet5->setPresentation("Un projet lambda");
        $projet5->setPicture($this->getReference('carouselMedia2'));
        $projet5->setDateSortie(new \DateTime());
        $projet5->setImages("Une photo");
        $projet5->setUrl("URL de quoi ?");
        $manager->persist($projet5);

        $projet6 = new Projets();
        $projet6->setProjectBanner("Je sais pas trop");
        $projet6->setNom("Prisma");
        $projet6->setType("Réseaux Sociaux");
        $projet6->setTechnologies("Pourquoi un Float");
        $projet6->setPresentation("Un projet lambda");
        $projet6->setPicture($this->getReference('carouselMedia3'));
        $projet6->setDateSortie(new \DateTime());
        $projet6->setImages("Une photo");
        $projet6->setUrl("URL de quoi ?");
        $manager->persist($projet6);

        $projet7 = new Projets();
        $projet7->setProjectBanner("Je sais pas trop");
        $projet7->setNom("Prisma");
        $projet7->setType("Réseaux Sociaux");
        $projet7->setTechnologies("Pourquoi un Float");
        $projet7->setPresentation("Un projet lambda");
        $projet7->setPicture($this->getReference('carouselMedia4'));
        $projet7->setDateSortie(new \DateTime());
        $projet7->setImages("Une photo");
        $projet7->setUrl("URL de quoi ?");
        $manager->persist($projet7);

        $projet8 = new Projets();
        $projet8->setProjectBanner("Je sais pas trop");
        $projet8->setNom("Prisma");
        $projet8->setType("Réseaux Sociaux");
        $projet8->setTechnologies("Pourquoi un Float");
        $projet8->setPresentation("Un projet lambda");
        $projet8->setPicture($this->getReference('facebook'));
        $projet8->setDateSortie(new \DateTime());
        $projet8->setImages("Une photo");
        $projet8->setUrl("URL de quoi ?");
        $manager->persist($projet8);

        $manager->flush();

        $this->addReference('projet1',$projet1);
        $this->addReference('projet2',$projet2);
        $this->addReference('projet3',$projet3);
        $this->addReference('projet4',$projet4);


    }

    public function getOrder()
    {
        return 3;
    }
}