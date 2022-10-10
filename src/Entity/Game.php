<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Game
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private int $id;

    #[ORM\Column(type: 'string', length: 255)]
    private string $planeModel;

    #[ORM\Column(type: 'decimal')]
    private float $distanceTravelled;

    #[ORM\Column(type: 'string', length: 255)]
    private string $participant;

    #[ORM\ManyToOne(targetEntity: Round::class, inversedBy: 'games')]
    private Round $round;

    /**
     * @param string $planeModel
     * @param float $distanceTravelled
     * @param string $participant
     */

    public function construct(string $planeModel, float $distanceTravelled, string $participant) : void
    {
        $this->planeModel = $planeModel;
        $this->distanceTravelled = $distanceTravelled;
        $this->participant = $participant;
    }

    /**
     * @return string
     */
    public function getPlaneModel(): string
    {
        return $this->planeModel;
    }

    /**
     * @param string $planeModel
     */
    public function setPlaneModel(string $planeModel): void
    {
        $this->planeModel = $planeModel;
    }

    /**
     * @return float
     */
    public function getDistanceTravelled(): float
    {
        return $this->distanceTravelled;
    }

    /**
     * @param float $distanceTravelled
     */
    public function setDistanceTravelled(float $distanceTravelled): void
    {
        $this->distanceTravelled = $distanceTravelled;
    }

    /**
     * @return string
     */
    public function getParticipant(): string
    {
        return $this->participant;
    }

    /**
     * @param string $participant
     */
    public function setParticipant(string $participant): void
    {
        $this->participant = $participant;
    }
}