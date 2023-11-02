<?php

class Participents implements Interface\IParticipents
{

    private Player $player_id;
    private bool $attendance;
    private string $suspension;
    private int $position_id;
    private int $tean_id;
    function getPlayer_id()
    {
        $this->player_id;
    }

    function getAttendance()
    {
        $this->attendance;
    }

    function setAttendance(bool $attendance = false)
    {
        $this->attendance;
    }

    function getSuspensions()
    {
        $this->suspension;
    }

    function setSuspensions()
    {
        $this->suspension;
    }

    function getPosition_id()
    {
        $this->position_id;
    }

    function getTean_id()
    {
        $this->tean_id;
    }
}