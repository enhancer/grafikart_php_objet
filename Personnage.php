<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Personnage
 *
 * @author chris
 */
class Personnage {

    public $vie = 80;
    public $atk = 20;
    public $nom;

    public function __construct($nom) {
        $this->nom = $nom;
    }

    public function getNom() {
        return $this->nom;
    }

    public function getVie() {
        return $this->vie;
    }

    public function getAtk() {
        return $this->atk;
    }

    public function setVie($vie) {
        $this->vie = $vie;
    }

    public function setAtk($atk) {
        $this->atk = $atk;
    }

        
    
    public function crier() {
        echo "CRIER";
    }

    public function regenerer($vie = null) {
        if ($vie == null) {
            $this->vie = 100;
        } else {
            $this->vie += $vie;
        }
    }

    public function mort() {
        return $this->vie <= 0;
    }

    public function attaque($cible) {
        $cible->vie -= $this->atk;
    }

}
