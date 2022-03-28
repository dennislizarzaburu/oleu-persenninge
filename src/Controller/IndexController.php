<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\Project;
use Doctrine\Persistence\ManagerRegistry;
use Liip\ImagineBundle\Imagine\Cache\CacheManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Vich\UploaderBundle\Templating\Helper\UploaderHelper;

class IndexController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(ManagerRegistry $doctrine, UploaderHelper $helper, CacheManager $imagineCacheManager): Response
    {
        $projects = $doctrine->getRepository(Project::class)->findBy(['enabled' => true]);
        $products = $doctrine->getRepository(Product::class)->findAll();


        $projectsJson = [];

        /** @var Project $project */
        foreach ($projects as $project) {
            $images = [];

            foreach ($project->getImages() as $image) {
                $images[$image->getId()] = [
                    'id' => $image->getId(),
                    'content' => $image->getContent(),
                    'thumb' => $imagineCacheManager->getBrowserPath($helper->asset($image), 'project_thumb'),
                    'preview' => $imagineCacheManager->getBrowserPath($helper->asset($image), 'project_preview'),
                    'detail' => $imagineCacheManager->getBrowserPath($helper->asset($image), 'project_detail')
                ];
            }

            $projectsJson[$project->getId()] = [
                'id' => $project->getId(),
                'title' => $project->getTitle(),
                'images' => $images
            ];
        }



        return $this->render('index/index.html.twig', [
            'projects' => $projects,
            'projectsJson' => json_encode($projectsJson),
            'products' => $products,
        ]);
    }
}
