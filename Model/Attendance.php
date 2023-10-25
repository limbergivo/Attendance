<?php

class Attendance
{
    // ID van de database van de speler eruit halen in MYSQL
    private Team $team;
    private DateTime $date;

    /**
     * @return mixed
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * @param mixed $player
     */
    public function setPlayer(Team $team): void
    {
        $this->team = $team;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate(DateTime $date): void
    {
        $this->date = $date;
    }
}