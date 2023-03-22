<?php

namespace App\Controller\Admin;

use App\Entity\HomeIllustrations;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class HomeIllustrationsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return HomeIllustrations::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            ImageField::new('illustrationCircleOne', 'Image')
                ->setBasePath('uploads/homeIllustration/')
                ->setUploadDir('public/uploads/homeIllustration')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false),
            TextField::new('titleCircleOne', 'Titre'),
            TextField::new('btnCircleOne', 'Titre du bouton'),
            TextField::new('btnUrlCircleOne', 'URL du bouton'),
            TextareaField::new('contentIllustrationCircleOne', 'Description'),

            ImageField::new('illustrationCircleTwo', 'Image')
                ->setBasePath('uploads/homeIllustration/')
                ->setUploadDir('public/uploads/homeIllustration')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false),
            TextField::new('titleCircleTwo', 'Titre'),
            TextField::new('btnCircleTwo', 'Titre du bouton'),
            TextField::new('btnUrlCircleTwo', 'URL du bouton'),
            TextareaField::new('contentIllustrationCircleTwo', 'Description'),

            ImageField::new('illustrationCircleThree', 'Image')
                ->setBasePath('uploads/homeIllustration/')
                ->setUploadDir('public/uploads/homeIllustration')
                ->setUploadedFileNamePattern('[randomhash].[extension]')
                ->setRequired(false),
            TextField::new('titleCircleThree', 'Titre'),
            TextField::new('btnCircleThree', 'Titre du bouton'),
            TextField::new('btnUrlCircleThree', 'URL du bouton'),
            TextareaField::new('contentIllustrationCircleThree', 'Description'),
        ];
    }

}
