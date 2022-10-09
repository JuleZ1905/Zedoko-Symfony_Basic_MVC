<?php

namespace App\Service;

use App\Entity\Game;
use App\Entity\Round;

class RoundGenerator
{
    public function getMockRounds(): array
    {
        $round1 = new Round();

        $game1 = new Game();
        $game2 = new Game();
        $game3 = new Game();
        $game4 = new Game();
        $game5 = new Game();
        $game6 = new Game();

        $game1->construct('Boeing 747', 1000, 'John Doe');
        $game2->construct('Boeing 847', 1000, 'John Done');
        $game3->construct('MyPlane 747', 1290, 'John Doe');
        $game4->construct('Boeing 947', 1000, 'John Done');
        $game5->construct('Boeing 747', 800, 'John Doe');
        $game6->construct('Boeing X47', 1000, 'John Done');

        $round2 = new Round();
        $round3 = new Round();

        $round1->construct(1, '2021-01-01', $game1, $game2);
        $round2->construct(2, '2021-01-02', $game3, $game4);
        $round3->construct(3, '2021-01-03', $game5, $game6);

        return [
            $round1,
            $round2,
            $round3
        ];
    }
}