<?php

require 'Personnage.php';

$merlin = new Personnage("Merlin");
$harry = new Personnage("Harry");





echo $merlin->getNom();
var_dump($merlin);

echo $harry->getNom();
var_dump($harry);