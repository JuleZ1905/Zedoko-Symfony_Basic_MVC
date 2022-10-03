<?php

namespace App\Entity;

class Round
{
    private int $id;
    private array $games;
    private string $date;

    public function __construct(int $id, string $date, ...$games)
    {
        $this->id = $id;
        $this->date = $date;
        foreach ($games as $game) {
            $this->games[] = $game;
        }
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
    public function getDate(): string
    {
        return $this->date;
    }

    /**
     * @param string $date
     */
    public function setDate(string $date): void
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getGames(): array
    {
        return $this->games;
    }

    public function addGame(Game $game): void
    {
        $this->games[] = $game;
    }
}