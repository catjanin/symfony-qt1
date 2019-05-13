<?php
// src/Controller/BlogController.php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog_index")
     */

    public function index()
    {
        return $this->render('blog/index.html.twig', [
            'owner' => 'Thomas',
        ]);
    }

    /**
     * @Route("/blog/show/{article}",
     *     name="blog_show"
     * )
     */

    public function show($article = ' ')
    {
        if($article === ' '){
            $slug = 'Article Sans Titre';
        }
        else if(preg_match('/[A-Z]/', $article) || preg_match('/_/', $article)){
            throw $this->createNotFoundException('404 not found');
        }
        else{
            $slug = ucwords(str_replace('-', ' ', $article));
        }

        return $this->render('blog/show.html.twig', ['articles' => $slug]);
    }
}
