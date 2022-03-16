<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\Project;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $projects = $doctrine->getRepository(Project::class)->findBy(['enabled' => true]);
        $products = $doctrine->getRepository(Product::class)->findAll();

        return $this->render('index/index.html.twig', [
            'projects' => $projects,
            'products' => $products,
        ]);
    }
}
