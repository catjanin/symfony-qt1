<?php
// src/Controller/BlogController.php
namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use App\Entity\Article;
use App\Entity\Category;
use Symfony\Component\Routing\Annotation\Route;


class BlogController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */

    public function index() :Response
    {
        $articles = $this->getDoctrine()
            ->getRepository(Article::class)
            ->findAll();

        if(!$articles){
            throw $this->createNotFoundException('No article found');
        }

        return $this->render('blog/index.html.twig', [
            'articles' => $articles,
        ]);
    }

/**
* Getting a article with a formatted slug for title
*
* @param string $slug The slugger
*
* @Route("/blog/show/{slug<^[a-z0-9-]+$>}",
*     defaults={"slug" = null},
*     name="blog_show")
 *  @return Response A response instance
*/
 public function show(?string $slug) : Response
{
    if (!$slug) {
        throw $this
            ->createNotFoundException('No slug has been sent to find an article in article\'s table.');
    }

    $slug = preg_replace(
        '/-/',
        ' ', ucwords(trim(strip_tags($slug)), "-")
    );
    return $this->render(
        'blog/show.html.twig',
        [
            'slug' => $slug
        ]
    );
}

    /**
     * @Route("/category/{name}", name="show_category")
     * @param category $category
     * @return Response
     */
    public function showByCategory(Category $category)
    {

        if (!$category) {
            throw $this->createNotFoundException('No slug has been sent to search in categories');
        }

        $articles = $category->getArticles();

        if(!$articles){
            throw $this->createNotFoundException('No article found');
        }

        return $this->render('blog/category.html.twig', [
            'articles' => $articles,
        ]);
    }
}
