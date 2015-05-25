<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('load_enumerators')) {
    function load_enumerators() 
    {
        $enumLocation = APPPATH . 'utils\\enums\\';
        
        foreach (glob($enumLocation . '*.php') as $filename) {
            include $filename;
        }
    }
}
