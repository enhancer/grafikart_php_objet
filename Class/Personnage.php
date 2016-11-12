<?php
namespace Tutoriel;
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

    protected $vie = 80;
    protected $atk = 20;
    protected $nom;
    const MAX_VIE = 100;

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
            $this->vie = self::MAX_VIE;
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
    
    private function empecher_negatif()
    {
        if($this->vie < 0)
        {
            $this->vie=0;
        }
    }

}
