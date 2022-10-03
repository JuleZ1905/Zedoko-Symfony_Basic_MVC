<?php

namespace App\Service;

use App\Entity\Game;
use App\Entity\Round;

class RoundGenerator
{
    public function getMockRounds(): array
    {
        return [
            new Round(1, '2021-01-01', new Game('Boeing 747', 1000, 'John Doe'), new Game('Boeing 847', 1000, 'John Done')),
            new Round(2, '2021-01-02', new Game('MyPlane 747', 1290, 'John Doe'), new Game('Boeing 947', 1000, 'John Done')),
            new Round(3, '2021-01-03', new Game('Boeing 747', 800, 'John Doe'), new Game('Boeing X47', 1000, 'John Done')),
        ];
    }
}