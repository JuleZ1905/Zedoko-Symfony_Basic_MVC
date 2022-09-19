<?php

namespace App\Entity;

class Round
{
    private int $id;
    private string $planeModel;
    private float $distanceTravelled;
    private string $participant;
    private string $date;

    public function __construct(int $id, string $planeModel, float $distanceTravelled, string $participant, string $date)
    {
        $this->id = $id;
        $this->planeModel = $planeModel;
        $this->distanceTravelled = $distanceTravelled;
        $this->participant = $participant;
        $this->date = $date;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
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

    /**
     * @return int
     */
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @param int $date
     */
    public function setDate(int $date): void
    {
        $this->date = $date;
    }


}