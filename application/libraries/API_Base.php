<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require 'REST_Controller.php';

class API_Base extends REST_Controller {
  
  public function __construct() {
    parent::__construct();
  }
  
  /**
   * Determines if there is a user session
   * @return TRUE if there is an authenticated session, FALSE otherwise
   */
  protected function is_logged_in()
  {
    return $this->session->userdata('logged_in') != null;
  }
  
  /**
   * Sends a "forbidden" response if there is no session and terminates
   * the script
   */
  protected function restrict()
  {
    if(! $this->is_logged_in()) {
       $stuff = (object)array('status' => FALSE);
       $this->response($stuff, 403);
       exit();
    }
  }
}