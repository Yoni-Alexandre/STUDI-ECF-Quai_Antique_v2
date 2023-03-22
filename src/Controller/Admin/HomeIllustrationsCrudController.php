<?php

namespace App\Controller\Admin;

use App\Entity\HomeIllustrations;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class HomeIllustrationsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return HomeIllustrations::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
