<?php

namespace App\Entity;

class Game
{
    private string $planeModel;
    private float $distanceTravelled;
    private string $participant;

    /**
     * @param string $planeModel
     * @param float $distanceTravelled
     * @param string $participant
     */
    public function __construct(string $planeModel, float $distanceTravelled, string $participant)
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