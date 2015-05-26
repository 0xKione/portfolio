<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *  Main Controller Class
 *
 *  The controller which handles all operations on the home page of the website
 *
 * @version 1.0
 * @author Rich
 */

class Main extends RG_Controller
{
    function __construct()
    {
        parent::__construct();
    }
    
    function index()
    {
        $data = array();
        $data['title'] = "My Website";
        $data['projectName'] = "Richard Gomez";
        
        $this->loadViews(PageEnum::Main, $data);
        
    }
}
