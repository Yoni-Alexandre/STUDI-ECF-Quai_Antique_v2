<?php

namespace App\Controller;

use App\Entity\OpeningHours;
use App\Entity\Products;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    private $entityManager;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/produits', name: 'products')]
    public function index(): Response
    {
        $openingHours = $this->entityManager->getRepository(OpeningHours::class)->findAll();
        $products = $this->entityManager->getRepository(Products::class)->findAll();


        return $this->render('product/index.html.twig', [
            'openingHours' => $openingHours,
            'products' => $products
        ]);
    }

    #[Route('/produit/{slug}', name: 'product')]
    public function showSlug($slug): Response
    {

        $openingHours = $this->entityManager->getRepository(OpeningHours::class)->findAll();
        $productSlug = $this->entityManager->getRepository(Products::class)->findOneBySlug($slug);

        if (!$productSlug) {
            return $this->redirectToRoute('products');
        }

        return $this->render('product/productShow.html.twig', [
            'openingHours' => $openingHours,
            'productSlug' => $productSlug
        ]);
    }
}
