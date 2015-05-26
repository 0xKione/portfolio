<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *  Base Controller Class
 *
 *  The controller that all controllers used by the website will inherit from
 *
 * @version 1.0
 * @author Rich
 */
class RG_Controller extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        
        load_enumerators();
        
        // Start the user's unique session via cookie
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }
    
    function loadViews($pageType, $data)
    {
        $content = $prefix = "";
        
        switch($pageType) {
            case 0:
                $content = "main";
                $prefix = "";
                break;
            default:
                break;
        }
        
        $this->load->view($prefix . "header.php", $data);
        $this->load->view($prefix . $content . ".php", $data);
        $this->load->view($prefix . "footer.php", $data);
    }
}
