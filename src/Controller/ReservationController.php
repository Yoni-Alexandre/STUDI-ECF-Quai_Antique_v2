<?php

namespace App\Controller;

use App\Entity\OpeningHours;
use App\Entity\ReservationCount;
use App\Entity\Reservations;
use App\Form\ReservationType;
use App\Repository\ReservationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReservationController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    // CREATION DE LA RESERVATION
    #[Route('/reservation', name: 'reservation')]
    // MODIFICATION DE LA RESERVATION
    #[Route('/reservation/{id}/modification', name: 'reservation_edit')]
    public function index(Reservations $reservation = null, Request $request): Response
    {
        // Si la réservation n'existe pas, on instancie un nouvel objet
        if ($reservation === null) {
            $reservation = new Reservations();
        }

        // Vérifier si l'utilisateur connecté est autorisé à modifier cette réservation
        // vérifie si l'identifiant de la réservation n'est pas "null" et si l'utilisateur connecté n'est pas le même que celui de la réservation
        if ($reservation->getId() !== null && $reservation->getUsers() !== $this->getUser()) {
            $openingHours = $this->entityManager->getRepository(OpeningHours::class)->findAll();
            // Redirection de l'utilisateur vers une page d'erreur ou un message d'erreur
            return $this->render('reservation/error.html.twig', [
                'message' => 'Vous n\'êtes pas autorisé à modifier cette réservation.',
                'openingHours' => $openingHours,
            ]);
        }

        $form = $this->createForm(ReservationType::class, $reservation);
        $form->handleRequest($request);

        $openingHours = $this->entityManager->getRepository(OpeningHours::class)->findAll();
        $notification = null;

        if ($form->isSubmitted() && $form->isValid()) {
            $reservation = $form->getData();

            if ($reservation->getId() === null) {
                if ($this->getUser()) {
                    $reservation->setUsers($this->getUser());
                } else {
                    $reservation->setUsers(null);
                }

                $this->entityManager->persist($reservation);
            } else {
                // Vérifier si l'utilisateur connecté est autorisé à modifier cette réservation
                if ($reservation->getId() !== null && $reservation->getUsers() !== $this->getUser()) {
                    // Rediriger l'utilisateur vers une page d'erreur ou un message d'erreur
                    return $this->render('reservation/error.html.twig', [
                        'message' => 'Vous n\'êtes pas autorisé à modifier cette réservation.',
                    ]);
                }
            }

            $this->entityManager->flush();

            if ($this->getUser()) {
//                return $this->redirectToRoute('view', [
                return $this->redirectToRoute('account', [
                    'id' => $reservation->getId()
                ]);
            } else {
                return $this->redirectToRoute('home');
            }

            $notification = "Votre réservation a bien été prise en compte";
        }

        // Récupérer le nombre maximum de réservation dans la table ReservationCount
        $maxReservationCount = $this->entityManager->getRepository(ReservationCount::class)->findAll();
        $maxReservationCount = $maxReservationCount[0]->getMaximunNumberOfReservation();

        // Récupérer le nombre d'invités dans la table Reservations
        $guestReservations = $this->entityManager->getRepository(Reservations::class)->findAll();

        // Boucle pour additionner le nombre d'invités
        for ($i = 0; $i < count($guestReservations); $i++) {
            $guestReservations[$i] = $guestReservations[$i]->getNumberOfGuest();
        }

        // Calcul du nombre de réservation restantes
        $reservationCount = array_sum($guestReservations);
        $resultCalcul = $maxReservationCount - $reservationCount;

        // Si le nombre de réservation est égal à 0, on affiche un message d'erreur
        if ($resultCalcul === 0) {
            $notification = "Le nombre maximum de réservation a été atteint";
        }

        return $this->render('reservation/index.html.twig', [
            'reservationForm' => $form->createView(),
            'openingHours' => $openingHours,
            'notification' => $notification,
            'maximumNumberOfReservation' => $resultCalcul
        ]);
    }


//    #[Route('/reservation/{id}', name: 'view')]
//    public function view(Reservations $reservation): Response
//    {
//        $notification = "Votre réservation a bien été prise en compte";
//        $openingHours = $this->entityManager->getRepository(OpeningHours::class)->findAll();
//
//        if ($reservation->getId() !== null && $reservation->getUsers() !== $this->getUser()) {
//            $openingHours = $this->entityManager->getRepository(OpeningHours::class)->findAll();
//            // Redirection de l'utilisateur vers une page d'erreur
//            return $this->render('reservation/error.html.twig', [
//                'message' => 'Vous n\'êtes pas autorisé à modifier cette réservation.',
//                'openingHours' => $openingHours,
//            ]);
//        }
//
//        return $this->render('reservation/administration.html.twig', [
//            'reservations' => $reservation,
//            'openingHours' => $openingHours,
//            'notification' => $notification
//        ]);
//    }

    // VISUALISATION DES RESERVATIONS PAR UTILISATEUR
    #[Route('/reservation/visualisation/{userId}', name: 'view_user')]
    public function viewUser($userId): Response
    {
        $reservations = $this->entityManager->getRepository(Reservations::class)->findBy(['users' => $userId]);
        $openingHours = $this->entityManager->getRepository(OpeningHours::class)->findAll();


        return $this->render('reservation/bookingOverview.html.twig', [
            'reservations' => $reservations,
            'openingHours' => $openingHours,
        ]);
    }
    // SUPPRESSION DE LA RESERVATION
    #[Route('/reservation/{id}/suppression', name: 'reservation_delete')]
    public function delete(Reservations $reservation): Response
    {
        $this->entityManager->remove($reservation);
        $this->entityManager->flush();

        return $this->redirectToRoute('delete');
    }

}
