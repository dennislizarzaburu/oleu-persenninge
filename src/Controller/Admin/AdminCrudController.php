<?php

namespace App\Controller\Admin;

use App\Entity\Admin;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class AdminCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Admin::class;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('admin.entity.admin.label.singular')
            ->setEntityLabelInPlural('admin.entity.admin.label.plural');
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->setPermission(Action::INDEX, 'ROLE_SUPER_ADMIN')
            ->setPermission(Action::DELETE, 'ROLE_SUPER_ADMIN')
            ->setPermission(Action::DETAIL, 'ROLE_SUPER_ADMIN')
            ->setPermission(Action::BATCH_DELETE, 'ROLE_SUPER_ADMIN')
            ->setPermission(Action::EDIT, 'ROLE_SUPER_ADMIN')
            ->setPermission(Action::NEW, 'ROLE_SUPER_ADMIN');
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('username')
                ->setLabel('admin.entity.admin.username'),
            EmailField::new('email')
                ->setLabel('admin.entity.admin.email'),
            ChoiceField::new('roles')
                ->setLabel('admin.entity.admin.roles')
                ->setChoices([
                    'admin.roles.ROLE_ADMIN' => 'ROLE_ADMIN',
                    'admin.roles.ROLE_SUPER_ADMIN' => 'ROLE_SUPER_ADMIN'
                ])
                ->allowMultipleChoices(),
            TextField::new('plainPassword')
                ->setLabel('admin.entity.admin.plain_password')
                ->onlyOnForms(),
        ];
    }
}
