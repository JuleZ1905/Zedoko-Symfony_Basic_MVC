<?php

namespace App\Controller;

use App\Entity\Game;
use App\Entity\Round;
use App\Service\RoundGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RoundsController extends AbstractController
{
    #[Route('/results', name: 'all_rounds')]
    public function all(RoundGenerator $roundGenerator): Response
    {
        $rounds = $roundGenerator->getMockRounds();
        return $this->render('rounds/index.html.twig', [
            'rounds' => $rounds,
        ]);
    }

    // create a route for a single round
    #[Route('/results/{id}', name: 'single_round')]
    public function single(int $id, RoundGenerator $roundGenerator): Response
    {
        $rounds = $roundGenerator->getMockRounds();

        $round = array_filter($rounds, fn($round) => $round->getId() === $id);
        $round = array_shift($round);
        // if the round is not found, return a 404
        if (!$round) {
            throw $this->createNotFoundException('Round not found');
        }

        // render the view
        return $this->render('rounds/index.html.twig', [
            'rounds' => [$round],
        ]);
    }
}

{

}