<?php

class Activity implements \Interface\IActivity
{
    private string $name;
    private string $notes;
    private Team $teams;
    private DateTime $date;


    function getName(string $name): string
    {
        return $this->name;
    }

    function getDate(\DateTime $date) :DateTime
    {
        return $this->date;
    }

    function getNotes(string $notes) : string
    {
        return $this->notes;
    }

    function getTeams(Team $team) : Team
    {
       return  $this->teams;
    }
}