<?php
namespace Tutoriel;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Archer
 *
 * @author F005276
 */
class Archer extends Personnage {
    
    protected $vie = 40;
    
    
    public function __construct($nom) {
        $this->vie = $this->vie / 2;
        parent::__construct($nom);
    }

    public function attaque($cible) {
        $cible->vie -= $this->atk;
        
        parent::attaque($cible);
    }
    
}
