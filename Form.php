<?php

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
class Form {
    
    
    private $data;
    public $surround = 'p';






    public function __construct($data = array()) {
        $this->data = $data;
    }
    
    private function surround($html){
        echo "<{$this->surround}>{$html}</{$this->surround}>";
        
    }
    
    private function getValue($index) {
        $getValue = isset($this->data[$index]) ? $this->data[$index] : null;
        return $getValue;
    }
    
    public function input ($name)
    {
        echo $this->surround('<input type="text" name="'.$name.'" value="'.$this->getValue($name).'">');
        
    }
    
    public function submit ()
    {
        echo $this->surround('<button type="submit">Envoyer</button>');
        
    }
}
