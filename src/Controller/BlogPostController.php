<?php

namespace App\Controller;

use App\Entity\BlogPost;
use App\Repository\BlogPostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogPostController extends AbstractController
{
    /**
     * @Route("/blog/list", name="list_post")
     */
    public function listPostAction(BlogPostRepository $blogpost)
    {
        return $this->render('blog_post/index.html.twig', [
            'blogposts' => $blogpost->findAll(),
        ]);
    }

    /**
     * @Route("/blog/{slug}", name="show_post")
     */
    public function showPostAction(BlogPost $blogpost)
    {
        return $this->render('blog_post/showpost.html.twig', [
            'blogpost' => $blogpost,
        ]);
    }

    /**
     * @Route("/blog/date/{slug}", name="show_post_date", requirements= {"date"="/[0-9]{4}/"} )
     */
    public function showPostActionWidthDate(BlogPost $blogpost)
    {
        return $this->render('blog_post/showpost.html.twig', [
            'blogpost' => $blogpost,
        ]);
    }
}
