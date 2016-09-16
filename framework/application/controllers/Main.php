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
        $data['title'] = "Richard Gomez | My Website";
        $data['description'] = "An ambitious self-starter, full-stack developer, and entrepreneur who is always looking for new challenges and experiences.";
        $data['projectName'] = "Richard Gomez";

        $data['pageType'] = 0;

        $this->loadViews(0, $data);
    }

    function jigl()
    {
        $data = array();
        $data['title'] = "Richard Gomez | JIGL Usage";
        $data['description'] = "A page describing how to use the JIGL library for inputs";
        $data['projectName'] = "Richard Gomez";

        $data['pageType'] = 1;

        $this->loadViews(1, $data);
    }
}
