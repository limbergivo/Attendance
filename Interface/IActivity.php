<?php

namespace Interface;

interface IActivity
{

    function getName(string $name);
    function getDate(\DateTime $date);
    function getNotes(string $notes);
    function getTeams(\Team $team);
}