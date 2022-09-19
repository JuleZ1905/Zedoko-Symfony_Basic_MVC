<?php

namespace App\Controller;

use App\Entity\Round;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RoundsController extends AbstractController
{


    // create a route for a single round
    #[Route('/results/{id}', name: 'rounds')]
    public function index(int $id): Response
    {
        $rounds = [
            new Round(1, 'Cessna 172', 100, 'John Doe', '2021-01-01'),
            new Round(2, 'Cessna 172', 200, 'John Doe', '2021-01-01'),
            new Round(3, 'Cessna 172', 300, 'John Doe', '2021-01-01'),
            new Round(4, 'Cessna 172', 400, 'John Doe', '2021-01-01'),
            new Round(5, 'Cessna 172', 500, 'John Doe', '2021-01-01'),
            new Round(6, 'Cessna 172', 600, 'John Doe', '2021-01-01'),
            new Round(23, 'Cessna 172', 700, 'John Doe', '2021-01-01'),
            new Round(8, 'Cessna 172', 800, 'John Doe', '2021-01-01'),
            new Round(9, 'Cessna 172', 900, 'John Doe', '2021-01-01'),
            new Round(10, 'Cessna 172', 1000, 'John Doe', '2021-01-01'),
        ];

        $round = array_filter($rounds, fn($round) => $round->getId() === $id);
        $round = array_shift($round);
        // render the view
        return $this->render('rounds/index.html.twig', [
            'round' => $round,
        ]);
    }
}

{

}