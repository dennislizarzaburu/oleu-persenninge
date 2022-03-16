<?php

namespace App\Controller\Admin;

use App\Entity\Inquiry;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class InquiryCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Inquiry::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('admin.entity.inquiry.label.singular')
            ->setEntityLabelInPlural('admin.entity.inquiry.label.plural');
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->add(Action::INDEX, Action::DETAIL)
            ->disable(Action::DELETE, Action::EDIT);
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
