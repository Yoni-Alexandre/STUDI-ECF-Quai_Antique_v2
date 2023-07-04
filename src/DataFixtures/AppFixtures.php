<?php

namespace App\DataFixtures;

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
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory as Faker;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // START : Suppression des fichiers existants
        $uploadsImages = glob('public/uploads/images/*');
        foreach ($uploadsImages as $uploadsImage) {
            if (is_file($uploadsImage)) {
                unlink($uploadsImage);
            }
        }

        $uploadsHomeIllustration = glob('public/uploads/homeIllustration/*');
        foreach ($uploadsHomeIllustration as $uploadsHomeIllustrations) {
            if (is_file($uploadsHomeIllustrations)) {
                unlink($uploadsHomeIllustrations);
            }
        }
        // END : Suppression des fichiers existants

        $faker = Faker::create('fr_FR');

        // Création de 3 catégories
        $categories = [];
        foreach (['Entrées', 'Plats', 'Desserts'] as $categoryName) {
            $category = new Categories();
            $category->setName($categoryName);
            $category->setSlug($faker->slug());

            $manager->persist($category);
            $categories[] = $category;
        }

        // Création de 50 produits
        $products = [];
        for ($i = 0; $i < 50; $i++) {
            $product = new Products();
            $product->setSlug($faker->slug());
            $product->setName($faker->word());
            $product->setDescription($faker->text());
            $product->setSubtitle($faker->sentence());
            $product->setIllustration($faker->image('public/uploads/images', 320, 320, null, false));
            $product->setPrice($faker->randomFloat(2, 1, 40));
            $product->setCategories($categories[$faker->numberBetween(0, 2)]);

            $manager->persist($product);
            $products[] = $product;
        }

        // Création de 3 menus
//        $menus = [];
        for ($i = 0; $i < 3; $i++) {
            $menu = new Menus();
            $menu->setTitle($faker->word());
            $menu->setSubtitle($faker->sentence());
            $menu->setOptionOne($faker->text());
            $menu->setOptionTwo($faker->text());
            $menu->setOptionThree($faker->text());
            $menu->setOptionFour($faker->text());
            $menu->setPrice($faker->randomFloat(2, 1, 40));

            $manager->persist($menu);
//            $menus[] = $menu;
        }

        // Création de l'administrateur
        $admin = new Users();
        $admin->setEmail('yoni-brault@blanche-de-castille.fr');
        $admin->setRoles(['ROLE_ADMIN']);
        $admin->setPassword('$2y$13$TQQqGwGiJC3Q80qNaxWP2e3Bh4D/yaF0QHkNuTrOH/NPhloEGoZnm');
        $admin->setLastname('Brault');
        $admin->setFirstname('Yoni-Alexandre');

        $manager->persist($admin);

       // Création du carousel
        $carousels = [];
        for ($i = 0; $i < 5; $i++) {
            $carousel = new Headers();
            $carousel->setIllustration($faker->image('public/uploads/images', 320, 320, null, false));
            $carousel->setName($faker->word());
            $carousel->setContent($faker->text());
            $carousel->setbtnTitle($faker->word());
            $carousel->setBtnUrl($faker->url());

            $manager->persist($carousel);
            $carousels[] = $carousel;
        }

        // Création du corps (haut) de la page d'accueil
        $body = new Bodies();
        $body->setImageTitleOne($faker->word());
        $body->setImageOne($faker->image('public/uploads/homeIllustration', 320, 320, null, false));
        $body->setImagePropertyOne($faker->word());
        $body->setContentImageOne($faker->text());
        $body->setImageTitleTwo($faker->word());
        $body->setImageTwo($faker->image('public/uploads/homeIllustration', 320, 320, null, false));
        $body->setImagePropertyTwo($faker->word());
        $body->setContentImageTwo($faker->text());
        $body->setImageTitleThree($faker->word());
        $body->setImageThree($faker->image('public/uploads/homeIllustration', 320, 320, null, false));
        $body->setImagePropertyThree($faker->word());
        $body->setContentImageThree($faker->text());

        $manager->persist($body);

        // Création du corps (bas) de la page d'accueil
        $homeIllustration = new HomeIllustrations();
        $homeIllustration->setIllustrationCircleOne($faker->image('public/uploads/homeIllustration', 320, 320, null, false));
        $homeIllustration->setTitleCircleOne($faker->word());
        $homeIllustration->setbtnCircleOne($faker->word());
        $homeIllustration->setBtnUrlCircleOne($faker->url());
        $homeIllustration->setContentIllustrationCircleOne($faker->text());

        $homeIllustration->setIllustrationCircleTwo($faker->image('public/uploads/homeIllustration', 320, 320, null, false));
        $homeIllustration->setTitleCircleTwo($faker->word());
        $homeIllustration->setbtnCircleTwo($faker->word());
        $homeIllustration->setBtnUrlCircleTwo($faker->url());
        $homeIllustration->setContentIllustrationCircleTwo($faker->text());

        $homeIllustration->setIllustrationCircleThree($faker->image('public/uploads/homeIllustration', 320, 320, null, false));
        $homeIllustration->setTitleCircleThree($faker->word());
        $homeIllustration->setbtnCircleThree($faker->word());
        $homeIllustration->setBtnUrlCircleThree($faker->url());
        $homeIllustration->setContentIllustrationCircleThree($faker->text());

        $manager->persist($homeIllustration);

        // Création de la galerie d'images
        $images = [];
        for ($i = 0; $i < 12; $i++) {
            $image = new Gallery();
            $image->setTitle($faker->word());
//            $image->setImage($faker->imageUrl(10, 10, 'food', true));
            $image->setImage($faker->image('public/uploads/homeIllustration', 320, 320, null, false));

            $manager->persist($image);
            $images[] = $image;
        }

        // Création des réservations
        $reservations = [];
        for ($i = 0; $i < 10; $i++) {
            $reservation = new Reservations();
            $reservation->setReservationDate($faker->dateTimeBetween('now', '+1 year'));
            $reservation->setReservationTime($faker->dateTime('now'));
            $reservation->setFirstname($faker->firstName());
            $reservation->setLastname($faker->lastName());
            $reservation->setAllergie($faker->text());
            $reservation->setNumberOfGuest($faker->numberBetween(1, 10));

            $manager->persist($reservation);
            $reservations[] = $reservation;
        }

        // Compteur de réservations maximales
        $counter = new ReservationCount();
        $counter->setMaximunNumberOfReservation($faker->numberBetween(50, 100));

        $manager->persist($counter);

        // Création des horaires
        $openingHour = new OpeningHours();
        $openingHour->setBlocOne($faker->time());
        $openingHour->setBlocTwo($faker->time());
        $openingHour->setBlocThree($faker->time());

        $manager->persist($openingHour);

        // Création de 10 utilisateurs
        $users = [];
        for ($i = 0; $i < 10; $i++) {
            $user = new Users();
            $user->setEmail($faker->email());
            $user->setRoles(['ROLE_USER']);
            $user->setPassword('$2y$13$TQQqGwGiJC3Q80qNaxWP2e3Bh4D/yaF0QHkNuTrOH/NPhloEGoZnm');
            $user->setLastname($faker->lastName());
            $user->setFirstname($faker->firstName());

            $manager->persist($user);
            $users[] = $user;
        }

        $manager->flush();

    }
}
