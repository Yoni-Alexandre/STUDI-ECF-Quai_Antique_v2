<?php

namespace App\Controller\Admin;

use App\Entity\Menus;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class MenusCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Menus::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title', 'Titre'),
            TextField::new('subtitle', 'Sous-titre'),
            TextareaField::new('optionOne', 'Option 1'),
            TextareaField::new('optionTwo', 'Option 2'),
            TextareaField::new('optionThree', 'Option 3'),
            TextareaField::new('optionFour', 'Option 4'),
            MoneyField::new('price', 'Prix')
                ->setCurrency('EUR'),
        ];
    }

}
