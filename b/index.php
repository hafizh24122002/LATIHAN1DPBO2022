<?php

include "soccerTeam.php";

$player = ["Hafizh", "Lutfi", "Hidayat"];
$teamList = new soccerTeam("tim1", "Indonesia", 2002, $player);

$teamList->printTeam();

?>