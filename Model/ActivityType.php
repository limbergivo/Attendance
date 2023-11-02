<?php

class ActivityType implements \Interface\IActivityType
{

    private string $match;
    private string $training;
    function getMatch() : string
    {
        return $this->match;
    }

    function getTraining() : string
    {
        return $this->training;
    }

    /**
     * @param string $match
     */
    public function setMatch(string $match): void
    {
        $this->match = $match;
    }

    /**
     * @param string $training
     */
    public function setTraining(string $training): void
    {
        $this->training = $training;
    }

}