<?php

namespace App\DataFixtures;

use App\Entity\BlogPost;
use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class BlogPostFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {

        $blogpost = new BlogPost();
        $blogpost->setTitle('Nouveau site en approche');
        $blogpost->setContent('Bonjour une v2 du site arrive l\'année prochaine');
        $category = new Category();
        $category->setName('news');
        $blogpost->setCategory($category);
        $blogpost->setDate(2018);
        $blogpost->setFeatured(true);
        $manager->persist($category);
        $manager->persist($blogpost);

        $blogpost = new BlogPost();
        $blogpost->setTitle('Ouverture du site !');
        $blogpost->setContent('Bonjour le site à ouvert :)');
        $category = new Category();
        $category->setName('news');
        $blogpost->setCategory($category);
        $blogpost->setDate(2019);
        $blogpost->setFeatured(true);
        $manager->persist($category);
        $manager->persist($blogpost);

        $blogpost = new BlogPost();
        $blogpost->setTitle('premier article!');
        $blogpost->setContent('notre premier article');
        $category = new Category();
        $category->setName('article');
        $blogpost->setCategory($category);
        $blogpost->setDate(2019);
        $blogpost->setFeatured(true);
        $manager->persist($category);
        $manager->persist($blogpost);




        $manager->flush();
    }
}
