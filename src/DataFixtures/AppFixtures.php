<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use App\Entity\Cocktail;
use App\Entity\Ingredient;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $faker = \Faker\Factory::create('FR-fr');

        for ($i = 1; $i <= 3; $i++) {
            $categorie = new Categorie();
            $categorie->setNom($faker->name($i));
            $categorie->setDescription($faker->text(45));

            $manager->persist($categorie);

            for ($j = 1; $j <= rand(3, 5); $j++) {

                for ($k = 1; $k <= rand(3, 5); $k++) {
                    $ingredient = new Ingredient();
                    $ingredient->setNom($faker->name($k));
                    $ingredient->setDescription($faker->realText(40));


                    $manager->persist($ingredient);
                }


                for ($l = 1; $l <= rand(3, 5); $l++) {
                    $cocktail = new Cocktail();

                    $cocktail->setNom($faker->name($l));
                    $cocktail->setDescription($faker->realText(40));
                    $cocktail->setPrix(5);
                    $cocktail->setVolume(2);
                    $cocktail->setOrigine($faker->text(20));
                    $cocktail->setImageUrl("http://placehold.it/350x400");

                    $manager->persist($cocktail);
                }

            }
        }

        $manager->flush();
    }
}
