<?php

namespace App\Controller\Admin;

use App\Entity\MissionType;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class MissionTypeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return MissionType::class;
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
