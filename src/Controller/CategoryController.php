<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\CategoryType;
use App\Entity\Category;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;

class CategoryController extends AbstractController
{
    /**
     * @Route("/category", name="category")
     */

    public function index(Request $request)
    {
        $category = new Category();
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $this->add($data);
        }

        return $this->render('category/index.html.twig', [
            'form' => $form->createView()
        ]);
    }

    public function add($category)
    {
        $em = $this->getDoctrine()->getManager();
        $em->persist($category);
        $em->flush();
    }
}
