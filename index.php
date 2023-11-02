<?php
include ("./Interface/IPlayer.php");
include("./Model/Player.php");
include("./Model/Team.php");
include ("./Model/Positions.php");


//Objecten aanmaken

$team = new Team();
$player = new Player(14);
$positions = new Positions();


$player->setName("test");
// intval functie(intval) zorgt ervoor dat de string gecast wordt naar een int
$player->setAge(intval("16"));
$player->setPosition(Positions::Goalkeeper);

$team->addPlayers($player);

echo "<pre>";
var_dump($team);
"</pre>" ;