<?php

class Team
{
private array $players;

    /**
     * @param player $player
     * @return void
     */
    public function addPlayers(player $player): void
    {
        $this->players[] = $player;
        //Optie 2 die mogelijk is
        //array_push($this->players, $player);
    }

    /**
     * @return array
     */
    public function getPlayers(): array
    {
        return $this->players;
    }
}