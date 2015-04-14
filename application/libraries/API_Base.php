<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class API_Base extends REST_Controller {
  
  public function __construct() {
    parent::__construct();
  }
  
  protected function is_logged_in()
  {
    return $this->session->userdata('logged_in') != null;
  }
  
  protected function restrict()
  {
    if(! $this->is_logged_in()) {
       $this->output->set_status_header(403);
       $stuff = (object)array('status' => FALSE);
       $this->output->set_content_type('application/json')->set_output(json_encode($stuff));
       $this->output->_display();
       exit();
    }
  }
}