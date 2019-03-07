<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Canister;

class CanisterFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $jug = new Canister();
        $jug->setName('Jug!');
        $jug->setCreatedAt(new \DateTimeImmutable());
        $jug->setDescription('Beautiful blue jug.');
        $manager->persist($jug);

        $jar = new Canister();
        $jar->setName('Jar!');
        $jar->setCreatedAt(new \DateTimeImmutable());
        $jar->setDescription('Broken jar.');
        $manager->persist($jar);

        $cup = new Canister();
        $cup->setName('Cup');
        $cup->setCreatedAt(new \DateTimeImmutable());
        $manager->persist($cup);

        $manager->flush();
    }
}
