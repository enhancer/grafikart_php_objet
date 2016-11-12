<?php
namespace Tutoriel\HTML;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Form
 *
 * @author chris
 */

/** 
 * Class Form
 * Permet de générer de la documentation
 */
class Form {
    
    /**
     *
     * @var array Données utilisées par le formulaire
     */
    protected $data;
    
    /**
     *
     * @var string Tag utilisé pour entouré les champs
     */
    public $surround = 'p';





    /**
     * 
     * @param type array Creer le formulaire avec le tableau de données
     */
    public function __construct($data = array()) {
        $this->data = $data;
    }
    
    /**
     * 
     * @param type string Renvoi l'html entouré de tag 
     */
    
    protected function surround($html){
        echo "<{$this->surround}>{$html}</{$this->surround}>";
        
    }
    
    
    /**
     * 
     * @param $index type string
     * @return type string
     * Va chercher le parametre d'entré au constructeur
     */
    protected function getValue($index) {
        $getValue = isset($this->data[$index]) ? $this->data[$index] : null;
        return $getValue;
    }
    
    /**
     * 
     * @param $name type string
     * Creer un input
     */
    
    public function input ($name)
    {
        echo $this->surround('<input type="text" name="'.$name.'" value="'.$this->getValue($name).'">');
        
    }
    
    /**
     * @param type string Creer un submit
     */
    
    public function submit ()
    {
        echo $this->surround('<button type="submit">Envoyer</button>');
        
    }
    
    public function date()
    {
        return new \DateTime();
    }
}
