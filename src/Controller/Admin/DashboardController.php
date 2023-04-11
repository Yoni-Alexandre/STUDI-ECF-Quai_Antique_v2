<?php

namespace App\Controller\Admin;

use App\Entity\Bodies;
use App\Entity\Categories;
use App\Entity\Gallery;
use App\Entity\Headers;
use App\Entity\HomeIllustrations;
use App\Entity\Menus;
use App\Entity\OpeningHours;
use App\Entity\Products;
use App\Entity\ReservationCount;
use App\Entity\Reservations;
use App\Entity\Users;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    public function __construct(private AdminUrlGenerator $adminUrlGenerator) {

    }
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        // DEBUT :
        // test de protection à l'accès de EasyAdmin
        //if($this->getUser()){
        $url = $this->adminUrlGenerator
            ->setController(UsersCrudController::class)
            ->generateUrl();
        return $this->redirect($url);
        //} else {
        //    return $this->render('home/index.html.twig');
        //}
        // FIN

        //return parent::index();

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        //return $this->redirect($adminUrlGenerator->setController(OneOfYourCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Le Quai Antique');
    }

    public function configureMenuItems(): iterable
    {
        //yield MenuItem::linkToDashboard('Menu', 'fa fa-home');
        yield MenuItem::section("Console d'administration", 'fa fa-gear');
        yield MenuItem::linkToCrud('Utilisateurs', 'fa fa-user', Users::class);
        yield MenuItem::linkToCrud('Catégories', 'fa fa-list-check', Categories::class);
        yield MenuItem::linkToCrud('Produits', 'fa fa-utensils', Products::class);
        yield MenuItem::linkToCrud('Menus', 'fa fa-utensils', Menus::class);
        yield MenuItem::linkToCrud('Réservations', 'fa fa-calendar-days', Reservations::class);
        yield MenuItem::linkToCrud('Nombre de couverts', 'fa fa-calendar-days', ReservationCount::class);
        yield MenuItem::section("Gestion de contenus", 'fa fa-gear');
        yield MenuItem::linkToCrud('Carousel', 'fa fa-desktop', Headers::class);
        yield MenuItem::linkToCrud('Corps du site (Haut)', 'fa fa-image', HomeIllustrations::class);
        yield MenuItem::linkToCrud('Corps du site (Bas)', 'fa fa-image', Bodies::class);
        yield MenuItem::linkToCrud('Galerie image', 'fa fa-image', Gallery::class);
        yield MenuItem::linkToCrud('Horaires d\'ouverture', 'fa fa-clock', OpeningHours::class);
    }
}
