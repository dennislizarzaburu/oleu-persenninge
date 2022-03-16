<?php

namespace App\Controller;

use App\Entity\Inquiry;
use App\Form\InquiryType;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class InquiryController extends AbstractController
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/anfrage', name: 'app_inquiry')]
    public function index(Request $request): Response
    {

        $inquiry = new Inquiry();

        $form = $this->createForm(InquiryType::class, $inquiry);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $inquiry = $form->getData();

            // ... perform some action, such as saving the task to the database

            $this->entityManager->persist($inquiry);
            $this->entityManager->flush();

            return $this->redirectToRoute('app_index');

        }

        return $this->renderForm('inquiry/index.html.twig', [
            'form' => $form,
        ]);
    }
}
