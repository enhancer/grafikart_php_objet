<?php
namespace Tutoriel;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Text
 *
 * @author chris
 */
class Text {
    
    private static $suffix = "€";
    const SUFFIX = "€";

        public static function withZero($chiffre)
    {
        if($chiffre < 10)
        {
            return '0'.$chiffre.self::SUFFIX;
        }
        else
        {
            return $chiffre.self::SUFFIX;
        }
    }
}
