<?php

namespace App\Controller\Admin;

use App\Entity\Admin;
use App\Entity\Inquiry;
use App\Entity\Page;
use App\Entity\Product;
use App\Entity\Project;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{

    private AdminUrlGenerator $adminUrlGenerator;

    public function __construct(AdminUrlGenerator $adminUrlGenerator)
    {
        $this->adminUrlGenerator = $adminUrlGenerator;
    }

    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        #return parent::index();

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        return $this->redirect($this->adminUrlGenerator->setController(PageCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Oleu Persenninge')
            ->setTranslationDomain('messages');
    }

    public function configureAssets(): Assets
    {
        return Assets::new()->addCssFile('admin/admin.css');
    }

    public function configureMenuItems(): iterable
    {
        return [
            MenuItem::linkToRoute('admin.crud.homepage', 'fa fa-home', 'app_index'),

            MenuItem::section('admin.sections.inquiries'),
            MenuItem::linkToCrud('admin.crud.inquiries.all', 'fa fa-inbox', Inquiry::class),
            MenuItem::section('admin.sections.content'),
            MenuItem::linkToCrud('admin.crud.projects', 'fa fa-ship', Project::class),
            MenuItem::linkToCrud('admin.crud.products', 'fa fa-box', Product::class),
            MenuItem::linkToCrud('admin.crud.pages', 'fa fa-file', Page::class),
            MenuItem::section('admin.sections.admin'),
            MenuItem::linkToCrud('admin.crud.admins', 'fa fa-user', Admin::class)
                ->setPermission('ROLE_SUPER_ADMIN'),
        ];
    }
}
