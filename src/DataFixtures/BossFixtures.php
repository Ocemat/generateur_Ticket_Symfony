<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Boss;

class BossFixtures extends Fixture {
    public function load(ObjectManager $manager) {
        for($i = 1; $i <= 10; $i++ ) {
            $boss = new Boss();
            $boss->setNom("nom $i")
                 ->setPrenom("prenom $i");
        $manager->persist($boss);
    }
        $manager->flush();
    }
}
