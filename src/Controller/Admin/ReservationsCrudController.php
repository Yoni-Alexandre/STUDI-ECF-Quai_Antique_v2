<?php

namespace App\Controller\Admin;

use App\Entity\Reservations;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TimeField;

class ReservationsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Reservations::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            NumberField::new('NumberOfGuest', 'Nombre de couvert(s)'),
            DateField::new('ReservationDate', 'Date'),
            TimeField::new('ReservationTime', 'Heure'),
            TextareaField::new('Allergie', 'Allergie'),
            TextField::new('Firstname', 'Prénom'),
            TextField::new('Lastname', 'Nom'),
        ];
    }

}
