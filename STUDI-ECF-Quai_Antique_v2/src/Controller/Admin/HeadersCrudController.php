<?php

namespace App\Controller\Admin;

use App\Entity\Headers;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class HeadersCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Headers::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name', 'Titre'),
            TextareaField::new('content', 'Contenu'),
            TextField::new('btnTitle', 'Titre du bouton'),
            TextField::new('btnUrl', 'Lien du bouton'),
            ImageField::new('illustration', 'Image')
                ->setBasePath('uploads/images/')
                ->setUploadDir('public/uploads/images')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false),
        ];
    }

}
