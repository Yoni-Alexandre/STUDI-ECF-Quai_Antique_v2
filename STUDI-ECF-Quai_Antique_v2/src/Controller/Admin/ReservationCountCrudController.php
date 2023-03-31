<?php

namespace App\Controller\Admin;

use App\Entity\ReservationCount;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;

class ReservationCountCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return ReservationCount::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            NumberField::new('maximunNumberOfReservation', 'Nombre de couvert(s)'),
        ];
    }

}
