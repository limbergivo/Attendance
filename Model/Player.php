<?php

class Player
{
private string $name;
private int $age;
private string $position;

private int $minAge;

public function __construct($minAge = 14)
{
    $this->minAge = $minAge;
}

    /**
     * @return mixed
    */
    public function getName()
    {
        return $this->name;
    }

    /**
    * @param mixed $name
    */
public function setName(string $name)
{
    $this->name = $name;
}

    /**
    * @return mixed
    */
    public function getAge()
    {
        return $this->age;
    }
    /**
     * @param mixed $age
     */
    public function setAge(int $age)
    {
        if($age < $this->minAge){
            throw new Exception("Min age is ".$this->minAge." to play.");
        }

        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param mixed $position
     */
    public function setPosition(string $position)
    {
        $this->position = $position;
    }
}