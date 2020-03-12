<?php

namespace App\DataFixtures;

use App\Entity\Bar;
use App\Entity\Foo;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 10; $i++) {
            $foo = new Foo();
            $bar = new Bar();

            $bar->setLuckyNumber(random_int(0, 100));
            $bar->setSecondLuckyNumber(random_int(0, 100));
            $foo->setBar($bar);

            $manager->persist($foo);
        }

        for ($i = 0; $i < 3; $i++) {
            $foo = new Foo();
            $bar = new Bar();

            $bar->setLuckyNumber(null);
            $bar->setSecondLuckyNumber(null);
            $foo->setBar($bar);

            $manager->persist($foo);
        }

        $manager->flush();
    }
}
