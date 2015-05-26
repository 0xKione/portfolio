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

if (!function_exists('print_string')) {
    function print_string($id)
    {
        echo $id;
    }
}
