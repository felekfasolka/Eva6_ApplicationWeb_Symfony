<?php

namespace App\Controller\Admin;

use App\Entity\SafeHouse;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class SafeHouseCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return SafeHouse::class;
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
