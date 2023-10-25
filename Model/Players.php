<?php

class Players
{
private $name;
private $age;

private $position;


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
public function setName($name)
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
    public function setAge($age)
    {
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
    public function setPosition($position)
    {
        $this->position = $position;
    }
}