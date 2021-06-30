<?php

namespace App\DataFixtures;

use App\Entity\Agent;
use App\Entity\Player;
use App\Entity\View3D;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Faker\Generator;

class AppFixtures extends Fixture
{
    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $faker = Factory::create();

        for ($i = 0; $i < 10; $i++) {
            $manager->persist($agent = (new Agent)->setName("{$faker->firstName}, {$faker->lastName}"));
            $manager->flush();

            $manager->persist($player1 = (new Player)->setName("{$faker->firstName}, {$faker->lastName}"));
            $manager->flush();

            $manager->persist((new View3D)
                ->setDate((new \DateTime)->add(new \DateInterval('P10D')))
                ->setPlayer($player1)
                ->setAgent($agent)
                ->setCurrency('EUR') // Make object
                ->setBet(0.86)
                ->setWin(1.45)
                ->setRake(0.03)
                ->setTournament(0.00)
                ->setNet(0.03)
                ->setFin(0.00)
                ->setAamsTicket('')
                ->setAamsTable(''));

            $manager->persist($player2 = (new Player)->setName("{$faker->firstName}, {$faker->lastName}"));
            $manager->flush();

            $manager->persist((new View3D)
                ->setDate((new \DateTime)->add(new \DateInterval('P20D')))
                ->setPlayer($player2)
                ->setAgent($agent)
                ->setCurrency('EUR') // Make object
                ->setBet(1.62)
                ->setWin(0.04)
                ->setRake(0.07)
                ->setTournament(0.00)
                ->setNet(0.07)
                ->setFin(0.00)
                ->setAamsTicket('')
                ->setAamsTable(''));

            $manager->persist($player3 = (new Player)->setName("{$faker->firstName}, {$faker->lastName}"));
            $manager->flush();

            $manager->persist((new View3D)
                ->setDate((new \DateTime)->add(new \DateInterval('P30D')))
                ->setPlayer($player3)
                ->setAgent($agent)
                ->setCurrency('EUR') // Make object
                ->setBet(4.64)
                ->setWin(2.64)
                ->setRake(0.22)
                ->setTournament(0.00)
                ->setNet(0.22)
                ->setFin(0.00)
                ->setAamsTicket('')
                ->setAamsTable(''));
            $manager->flush();
        }
    }
}
