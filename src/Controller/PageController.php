<?php

namespace App\Controller;

use App\Entity\Page;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    #[Route('/page/{slug}', name: 'app_page')]
    #[ParamConverter('page', class: 'App:Page' )]
    public function index(Page $page): Response
    {
        return $this->render('page/index.html.twig', [
            'page' => $page,
        ]);
    }
}
