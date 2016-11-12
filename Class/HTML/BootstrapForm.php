<?php
namespace Tutoriel\HTML;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BootstrapForm
 *
 * @author F005276
 */
class BootstrapForm extends \Tutoriel\HTML\Form{
    
    
    
    
    
    /**
     * 
     * @param type string Renvoi l'html entouré de tag 
     */
    
    protected function surround($html){
        echo "<div class=\"form-group\">{$html}</{$this->surround}>";
        
    }
    
    
    
    
    
    
    /**
     * 
     * @param $name type string
     * Creer un input
     */
    
    public function input ($name)
    {
        echo $this->surround(
                '<label>'.$name.'</label>'
                . '<input type="text" name="'.$name.'" value="'.$this->getValue($name).'" class ="form-control">');
        
    }
    
    /**
     * @param type string Creer un submit
     */
    
    public function submit ()
    {
        echo $this->surround('<button type="submit" class ="btn-primary">Envoyer</button>');
        
    }
}
