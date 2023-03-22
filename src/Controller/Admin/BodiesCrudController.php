<?php

namespace App\Controller\Admin;

use App\Entity\Bodies;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;


class BodiesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Bodies::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('imageTitleOne', 'Titre'),
            ImageField::new('imageOne', 'Image')
                ->setBasePath('uploads/homeIllustration/')
                ->setUploadDir('public/uploads/homeIllustration')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false),
            TextField::new('imagePropertyOne', 'Description'),
            TextareaField::new('contentImageOne', 'Contenu'),

            TextField::new('imageTitleTwo', 'Titre'),
            ImageField::new('imageTwo', 'Image')
                ->setBasePath('uploads/homeIllustration/')
                ->setUploadDir('public/uploads/homeIllustration')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false),
            TextField::new('imagePropertyTwo', 'Description'),
            TextareaField::new('contentImageTwo', 'Contenu'),

            TextField::new('imageTitleThree', 'Titre'),
            ImageField::new('imageThree', 'Image')
                ->setBasePath('uploads/homeIllustration/')
                ->setUploadDir('public/uploads/homeIllustration')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false),
            TextField::new('imagePropertyThree', 'Description'),
            TextareaField::new('contentImageThree', 'Contenu')
        ];
    }

}
