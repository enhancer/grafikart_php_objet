<?php
namespace Tutoriel;
require 'Class/Autoloader.php';

Autoloader::register();


$merlin = new Personnage('Merlin');
var_dump($merlin);
$harry = new Personnage('Harry');
var_dump($harry);
$legolas = new Archer('Legolas');
var_dump($legolas);
