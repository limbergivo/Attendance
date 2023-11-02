<?php

namespace Interface;

interface IPlayer
{
    function setName(string $name);
    function getName();
    function setAge(int $age);
    function getAge();
    function setPosition(string $position);
    function getPosition();

}