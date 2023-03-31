<?php

namespace App\Controller;

use App\Entity\Bodies;
use App\Entity\Headers;
use App\Entity\HomeIllustrations;
use App\Entity\OpeningHours;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    private $entityManager;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        $headers = $this->entityManager->getRepository(Headers::class)->findAll();
        $homeIllustrations = $this->entityManager->getRepository(HomeIllustrations::class)->findAll();
        $bodyIllustrations = $this->entityManager->getRepository(Bodies::class)->findAll();
        $openingHours = $this->entityManager->getRepository(OpeningHours::class)->findAll();


        return $this->render('home/index.html.twig', [
            'headers' => $headers,
            'homeIllustrations' => $homeIllustrations,
            'bodyIllustrations' => $bodyIllustrations,
            'openingHours' => $openingHours
        ]);
    }
    #[Route('/suppression', name: 'delete')]
    public function redirectToDelete(): Response
    {
        $openingHours = $this->entityManager->getRepository(OpeningHours::class)->findAll();
        return $this->render('home/delete.html.twig', [
            'openingHours' => $openingHours
        ]);
    }

}
