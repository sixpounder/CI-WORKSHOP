<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends MY_Controller {

  public function __construct() {
    parent::__construct();
    $this->loadModel('User', 'user_model');
  }

  public function index()
  {
        
  }

  public function create()
  {
  }
}
