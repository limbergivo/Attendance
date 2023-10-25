<?php
include("./Model/Player.php");
include("./Model/Team.php");
//Objecten aanmaken
$team = new Team();
$player = new Player(14);

$player->setName("test");
// intval functie(intval) zorgt ervoor dat de string gecast wordt naar een int
$player->setAge(intval("10"));
$player->setPosition("Keeper");

$team->addPlayers($player);

echo "<pre>";
var_dump($team);
"</pre>" ;