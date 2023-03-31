<?php

namespace App\Controller;

use App\Entity\Menus;
use App\Entity\OpeningHours;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MenuController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    #[Route('/menus', name: 'menus')]
    public function index(): Response
    {
        $openingHours = $this->entityManager->getRepository(OpeningHours::class)->findAll();
        $menus = $this->entityManager->getRepository(Menus::class)->findAll();

        return $this->render('menu/index.html.twig', [
            'openingHours' => $openingHours,
            'menus' => $menus
        ]);
    }
}
