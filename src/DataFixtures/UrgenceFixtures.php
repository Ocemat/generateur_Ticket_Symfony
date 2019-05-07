<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Urgence;

class UrgenceFixtures extends Fixture {
    public function load(ObjectManager $manager) {
        for($i = 1; $i <= 10; $i++ ) {
            $urgence = new Urgence();
            $urgence->setLibelle("Urgence n°$i");
        $manager->persist($urgence);
        }
        $manager->flush();
    }
}
