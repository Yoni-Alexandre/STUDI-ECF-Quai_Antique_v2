<?php

namespace App\Controller;

use App\Entity\Categories;
use App\Entity\OpeningHours;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/categories', name: 'categories_')]
class CategoriesController extends AbstractController
{
    private $entityManager;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    #[Route('/{slug}', name: 'list')]
    public function list(Categories $categories): Response
    {
        $openingHours = $this->entityManager->getRepository(OpeningHours::class)->findAll();
        $products = $categories->getProducts();

//        if (!$categories) {
//            return $this->redirectToRoute('products');
//        }

        return $this->render('categories/list.html.twig', [
            'openingHours' => $openingHours,
            'categories' => $categories,
            'products' => $products
        ]);
    }
}
