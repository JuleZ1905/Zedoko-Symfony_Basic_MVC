<?php

namespace App\Controller;

use App\Entity\Game;
use App\Entity\Round;
use App\Form\GameType;
use App\Form\RoundType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    #[Route('/admin/new', name: 'new_admin')]
    public function new(Request $request, ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();

        $game = new Game();
        $form = $this->createForm(GameType::class, $game);

        $round = new Round();
        $form2 = $this->createForm(RoundType::class, $round);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $game = $form->getData();

            $entityManager->persist($game);
            $entityManager->flush();
        }

        $form2->handleRequest($request);
        if ($form2->isSubmitted() && $form2->isValid()) {
            $round = $form2->getData();

            $entityManager->persist($round);
            $entityManager->flush();
        }

        return $this->render('admin/new.html.twig', [
            'form' => $form->createView(),
            'form2' => $form2->createView(),
        ]);

    }

}