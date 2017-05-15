<?php
namespace Users\UsersBundle\DataFixtures\ORM ;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use User\UserBundle\Entity\User;

class UsersData extends AbstractFixture implements FixtureInterface, ContainerAwareInterface, OrderedFixtureInterface
{
    private $container;
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        $role = array('ROLE_ADMIN');


        $user_loic = new User();
        $user_loic->setRoles($role);
        $user_loic->setNom('Oulerich');
        $user_loic->setPrenom('Loic');
        $user_loic->setEmail('loic.oulerich@viacesi.fr');
        $user_loic->setPassword($this->container->get('security.encoder_factory')->getEncoder($user_loic)->encodePassword('titi', $user_loic->getSalt()));
        $user_loic->setEnabled(1);
//        $user_loic->setMedia($this->getReference('oulerich_loic'));
        $manager->persist($user_loic);

        $user_cedric = new User();
        $user_cedric->setNom('Meyer');
        $user_cedric->setRoles($role);
        $user_cedric->setPrenom('Cedric');
        $user_cedric->setEmail('cedric.meyer@viacesi.fr');
        $user_cedric->setPassword($this->container->get('security.encoder_factory')->getEncoder($user_cedric)->encodePassword('toto', $user_cedric->getSalt()));
        $user_cedric->setEnabled(1);
//        $user_cedric->setMedia($this->getReference('meyer_cedric'));
        $manager->persist($user_cedric);

        $user_cyril = new User();
        $user_cyril->setNom('Sniadach');
        $user_cyril->setPrenom('Cyril');
        $user_cyril->setEmail('cyril.sniadach@viacesi.fr');
        $user_cyril->setPassword($this->container->get('security.encoder_factory')->getEncoder($user_cyril)->encodePassword('tata', $user_cyril->getSalt()));
        $user_cyril->setEnabled(1);
//        $user_cyril->setMedia($this->getReference('sniadach_cyril'));
        $manager->persist($user_cyril);


        $manager->flush();

        $this->addReference('user_loic', $user_loic);
        $this->addReference('user_cedric', $user_cedric);
        $this->addReference('user_cyril', $user_cyril);
    }
    public function getOrder()
    {
        return 2;
    }
}