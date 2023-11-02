<?php

class Attendance
{
    // ID van de database van de speler eruit halen in MYSQL
    private int $player_id;
    private DateTime $date;
    protected bool $attendance = false;

    public function getPlayerId(): int
    {
        return $this->player_id;
    }

    public function setPlayerId(int $player_id): void
    {
        $this->player_id = $player_id;
    }

    public function getDate(): DateTime
    {
        return $this->date;
    }

    public function setDate(DateTime $date): void
    {
        $this->date = $date;
    }

    public function isAttendance(): bool
    {
        return $this->attendance;
    }

    public function setAttendance(bool $attendance): void
    {
        $this->attendance = $attendance;
    }


}