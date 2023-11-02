<?php


use Interface\IYear;

class Year implements IYear
{
    private string $year;


    /**
     * @return string
     */
    public function getYear(string $year): string
    {
        return $this->year;
    }

    public function setYear(string $year): string
    {
        return $this->year;
    }


}