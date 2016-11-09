<?php

require 'Personnage.php';

$merlin = new Personnage("Merlin");
$harry = new Personnage("Harry");





echo $merlin->nom;
var_dump($merlin);

echo $harry->nom;
var_dump($harry);