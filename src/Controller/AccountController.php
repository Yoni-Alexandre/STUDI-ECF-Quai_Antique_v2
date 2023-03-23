<?php

namespace App\Controller;

use App\Entity\OpeningHours;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccountController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    #[Route('/compte', name: 'account')]
    public function index(): Response
    {
        $openingHours = $this->entityManager->getRepository(OpeningHours::class)->findAll();
        return $this->render('account/index.html.twig', [
            'openingHours' => $openingHours
        ]);
    }
}
