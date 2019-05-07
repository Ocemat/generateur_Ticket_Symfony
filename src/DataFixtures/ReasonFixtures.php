<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Reason;

class ReasonFixtures extends Fixture {
    public function load(ObjectManager $manager) {
        for($i = 1; $i <= 10; $i++ ) {
            $reason = new Reason();
            $reason->setLibelle("Raison n°$i");

        $manager->persist($reason);
    }
        $manager->flush();
    }
}
