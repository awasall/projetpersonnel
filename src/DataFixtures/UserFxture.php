<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class UserFxture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setUsername("sallawa622@gmail.com");
        $user->setRoles(['ROLE_SUPERADMIN']);    
        $user->setPassword('$2y$13$xqZr/7TZS32rLpjGUYwaIu50GvHldiWMKdWuKgO7OzyXO/fq.tH2y');
        $user->setPrenom("Awa");
        $user->setNom("sall");
        $user->setTelephone("776981425");
        $user->setImageName("capture");
        $user->setCompte("WARI");
        $user->setStatut("actif");
        $user->setUpdatedAt(new \DateTime());
        $user->setEntreprise("WARI");
        $user->setAdresse("dakar");
        $manager->persist($user);

        $manager->flush();
    }
}
