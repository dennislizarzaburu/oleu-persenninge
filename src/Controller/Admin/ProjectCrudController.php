<?php

namespace App\Controller\Admin;

use App\Entity\Project;
use App\Form\ProjectImageType;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ProjectCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Project::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('admin.entity.project.label.singular')
            ->setEntityLabelInPlural('admin.entity.project.label.plural');
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('title'),
            BooleanField::new('enabled'),
            CollectionField::new('images')
                ->setEntryType(ProjectImageType::class)
                ->setEntryIsComplex(true),
        ];
    }
}
