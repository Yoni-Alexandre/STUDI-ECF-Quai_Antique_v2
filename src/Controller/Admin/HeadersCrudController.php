<?php

namespace App\Controller\Admin;

use App\Entity\Headers;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class HeadersCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Headers::class;
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
