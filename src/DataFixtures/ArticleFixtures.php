<?php

namespace App\DataFixtures;

use App\Entity\Article;
use Doctrine\Bundle\FixturesBundle\Fixture;
use DOctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Faker;

class ArticleFixtures extends Fixture implements DependentFixtureInterface
{

    const ARTICLENUMBER = 50;
    const MAXTITLELENGTH = 50;
    const MAXCONTENTLENGTH = 1000;

    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr_FR');
        $CategoriesFixtures = new CategoryFixtures();

        for ($x = 0; $x<self::ARTICLENUMBER; $x++) {
            $article = new Article();
            $article->setTitle(mb_strtolower($faker->realText($maxNbChars = self::MAXTITLELENGTH)));
            $article->setContent($faker->realText($maxNbChars = self::MAXCONTENTLENGTH));
            $manager->persist($article);
            $possibleCategories = array_keys($CategoriesFixtures->getCategories());
            $article->setCategory($this->getReference('categorie_'.rand(0, count($possibleCategories) - 1)));
        }

        $manager->flush();
    }

    public function getDependencies()
    {
        return [CategoryFixtures::class];
    }
}