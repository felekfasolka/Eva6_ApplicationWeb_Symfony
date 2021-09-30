<?php

namespace App\Controller\Admin;

use App\Entity\Mission;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class MissionCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Mission::class;
    }


    public function configureFields(string $pageName): iterable
    {
        yield AssociationField::new('missionStatus');
        yield AssociationField::new('missionType');
        yield TextField::new('title');
        yield TextField::new('codeName');
        yield TextareaField::new('description')->hideOnIndex();
        yield TextField::new('country');
        yield DateField::new('startDate');
        yield DateField::new('endDate');
        yield AssociationField::new('agents');
        yield AssociationField::new('targets');
        yield AssociationField::new('contacts');
        yield AssociationField::new('safeHouses');

    }

}
