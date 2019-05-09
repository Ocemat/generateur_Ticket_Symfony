<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Noob;

class NoobFixtures extends Fixture {
    public function load(ObjectManager $manager) {
        for($i = 1; $i <= 10; $i++ ) {
            $noob = new Noob();
            $noob->setNom("nom $i")
                 ->setEmail("email$i@gmail.com")
                 ->setPassword("password$i")
                 ->setPrenom("prenom $i");
        $manager->persist($noob);
        }
        $manager->flush();
    }
}
