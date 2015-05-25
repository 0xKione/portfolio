<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *  Page View Enumerator
 *
 *  An enumerator to determine which view to show when loading views
 *
 * @version 1.0
 * @author Rich
 */

require(APPPATH . "utils\\BaseEnum.php");

abstract class PageEnum extends BaseEnum
{
    const Main = 0;
}
